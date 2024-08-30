import * as cdk from 'aws-cdk-lib';
import * as ecs from 'aws-cdk-lib/aws-ecs';
import * as efs from 'aws-cdk-lib/aws-efs';
import * as ec2 from 'aws-cdk-lib/aws-ec2';
import { Construct } from 'constructs';

export class VpcCdkStack extends cdk.Stack {
  constructor(scope: Construct, id: string, props?: cdk.StackProps) {
    super(scope, id, props);

    // Create VPC
    const vpc = new ec2.Vpc(this, 'KokohubVPC', {
      maxAzs: 1,
      subnetConfiguration: [
        {
          cidrMask: 24,
          name: 'Public',
          subnetType: ec2.SubnetType.PUBLIC,
        },
        {
          cidrMask: 24,
          name: 'Private',
          subnetType: ec2.SubnetType.PRIVATE_WITH_EGRESS,
        },
      ],
    });

    // Create ECS Cluster
    const cluster = new ecs.Cluster(this, 'KokohubCluster', { vpc });

    // Create EFS File System
    const fileSystem = new efs.FileSystem(this, 'KokohubEFS', {
      vpc,
      vpcSubnets: { subnetType: ec2.SubnetType.PRIVATE_WITH_EGRESS },
    });

    // Create ECS Task Definition
    const taskDefinition = new ecs.FargateTaskDefinition(this, 'KokohubTaskDef');

    // Add container to task definition
    taskDefinition.addContainer('KokohubContainer', {
      image: ecs.ContainerImage.fromRegistry('amirrhkm/kokohub-api:latest'),
      portMappings: [{ containerPort: 80 }],
    });

    // Mount EFS volume to task definition
    taskDefinition.addVolume({
      name: 'sqlite-data',
      efsVolumeConfiguration: {
        fileSystemId: fileSystem.fileSystemId,
      },
    });

    // Create ECS Service
    new ecs.FargateService(this, 'KokohubService', {
      cluster,
      taskDefinition,
      desiredCount: 1,
      assignPublicIp: true,
      vpcSubnets: { subnetType: ec2.SubnetType.PUBLIC },
    });
  }
}
