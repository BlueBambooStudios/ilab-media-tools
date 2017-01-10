<?php
namespace ILAB_Aws\CloudFormation;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CloudFormation** service.
 *
 * @method \ILAB_Aws\Result cancelUpdateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelUpdateStackAsync(array $args = [])
 * @method \ILAB_Aws\Result continueUpdateRollback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise continueUpdateRollbackAsync(array $args = [])
 * @method \ILAB_Aws\Result createChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChangeSetAsync(array $args = [])
 * @method \ILAB_Aws\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChangeSetAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \ILAB_Aws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChangeSetAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStackEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackEventsAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStackResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStackResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStackResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \ILAB_Aws\Result estimateTemplateCost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise estimateTemplateCostAsync(array $args = [])
 * @method \ILAB_Aws\Result executeChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeChangeSetAsync(array $args = [])
 * @method \ILAB_Aws\Result getStackPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStackPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result getTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateAsync(array $args = [])
 * @method \ILAB_Aws\Result getTemplateSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateSummaryAsync(array $args = [])
 * @method \ILAB_Aws\Result listChangeSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangeSetsAsync(array $args = [])
 * @method \ILAB_Aws\Result listStackResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStackResourcesAsync(array $args = [])
 * @method \ILAB_Aws\Result listStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStacksAsync(array $args = [])
 * @method \ILAB_Aws\Result setStackPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setStackPolicyAsync(array $args = [])
 * @method \ILAB_Aws\Result signalResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signalResourceAsync(array $args = [])
 * @method \ILAB_Aws\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 * @method \ILAB_Aws\Result validateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateTemplateAsync(array $args = [])
 */
class CloudFormationClient extends AwsClient {}
