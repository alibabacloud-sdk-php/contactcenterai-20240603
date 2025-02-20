<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\URL;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeImageRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeImageResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultShrinkRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageResponse;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ContactCenterAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('contactcenterai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 根据类型调用大模型.
     *
     * @param request - AnalyzeConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AnalyzeConversationResponse
     *
     * @param string                     $workspaceId
     * @param string                     $appId
     * @param AnalyzeConversationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AnalyzeConversationResponse
     */
    public function analyzeConversationWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryTags) {
            @$body['categoryTags'] = $request->categoryTags;
        }

        if (null !== $request->customPrompt) {
            @$body['customPrompt'] = $request->customPrompt;
        }

        if (null !== $request->dialogue) {
            @$body['dialogue'] = $request->dialogue;
        }

        if (null !== $request->examples) {
            @$body['examples'] = $request->examples;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->modelCode) {
            @$body['modelCode'] = $request->modelCode;
        }

        if (null !== $request->resultTypes) {
            @$body['resultTypes'] = $request->resultTypes;
        }

        if (null !== $request->sceneName) {
            @$body['sceneName'] = $request->sceneName;
        }

        if (null !== $request->serviceInspection) {
            @$body['serviceInspection'] = $request->serviceInspection;
        }

        if (null !== $request->sourceCallerUid) {
            @$body['sourceCallerUid'] = $request->sourceCallerUid;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->timeConstraintList) {
            @$body['timeConstraintList'] = $request->timeConstraintList;
        }

        if (null !== $request->userProfiles) {
            @$body['userProfiles'] = $request->userProfiles;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeConversation',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . URL::percentEncode($workspaceId) . '/ccai/app/' . URL::percentEncode($appId) . '/analyze_conversation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AnalyzeConversationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AnalyzeConversationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据类型调用大模型.
     *
     * @param request - AnalyzeConversationRequest
     * @returns AnalyzeConversationResponse
     *
     * @param string                     $workspaceId
     * @param string                     $appId
     * @param AnalyzeConversationRequest $request
     *
     * @return AnalyzeConversationResponse
     */
    public function analyzeConversation($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeConversationWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * 图片分析.
     *
     * @param request - AnalyzeImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AnalyzeImageResponse
     *
     * @param string              $workspaceId
     * @param string              $appId
     * @param AnalyzeImageRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return AnalyzeImageResponse
     */
    public function analyzeImageWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrls) {
            @$body['imageUrls'] = $request->imageUrls;
        }

        if (null !== $request->resultTypes) {
            @$body['resultTypes'] = $request->resultTypes;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnalyzeImage',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . URL::percentEncode($workspaceId) . '/ccai/app/' . URL::percentEncode($appId) . '/analyzeImage',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AnalyzeImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AnalyzeImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 图片分析.
     *
     * @param request - AnalyzeImageRequest
     * @returns AnalyzeImageResponse
     *
     * @param string              $workspaceId
     * @param string              $appId
     * @param AnalyzeImageRequest $request
     *
     * @return AnalyzeImageResponse
     */
    public function analyzeImage($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->analyzeImageWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * 创建语音文件调用llm任务
     *
     * @param request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTaskResponse
     *
     * @param string            $workspaceId
     * @param string            $appId
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogue) {
            @$body['dialogue'] = $request->dialogue;
        }

        if (null !== $request->examples) {
            @$body['examples'] = $request->examples;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->modelCode) {
            @$body['modelCode'] = $request->modelCode;
        }

        if (null !== $request->resultTypes) {
            @$body['resultTypes'] = $request->resultTypes;
        }

        if (null !== $request->serviceInspection) {
            @$body['serviceInspection'] = $request->serviceInspection;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        if (null !== $request->templateIds) {
            @$body['templateIds'] = $request->templateIds;
        }

        if (null !== $request->transcription) {
            @$body['transcription'] = $request->transcription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . URL::percentEncode($workspaceId) . '/ccai/app/' . URL::percentEncode($appId) . '/createTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建语音文件调用llm任务
     *
     * @param request - CreateTaskRequest
     * @returns CreateTaskResponse
     *
     * @param string            $workspaceId
     * @param string            $appId
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * 语音文件调用大模型获取结果.
     *
     * @param tmpReq - GetTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTaskResultResponse
     *
     * @param GetTaskResultRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTaskResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->requiredFieldList) {
            $request->requiredFieldListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requiredFieldList, 'requiredFieldList', 'simple');
        }

        $query = [];
        if (null !== $request->requiredFieldListShrink) {
            @$query['requiredFieldList'] = $request->requiredFieldListShrink;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskResult',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ccai/app/getTaskResult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 语音文件调用大模型获取结果.
     *
     * @param request - GetTaskResultRequest
     * @returns GetTaskResultResponse
     *
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskResultWithOptions($request, $headers, $runtime);
    }

    /**
     * CCAI服务面API.
     *
     * @param request - RunCompletionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunCompletionResponse
     *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RunCompletionResponse
     */
    public function runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dialogue) {
            @$body['Dialogue'] = $request->dialogue;
        }

        if (null !== $request->fields) {
            @$body['Fields'] = $request->fields;
        }

        if (null !== $request->modelCode) {
            @$body['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->serviceInspection) {
            @$body['ServiceInspection'] = $request->serviceInspection;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        if (null !== $request->templateIds) {
            @$body['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletion',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . URL::percentEncode($workspaceId) . '/ccai/app/' . URL::percentEncode($appId) . '/completion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunCompletionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCompletionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * CCAI服务面API.
     *
     * @param request - RunCompletionRequest
     * @returns RunCompletionResponse
     *
     * @param string               $workspaceId
     * @param string               $appId
     * @param RunCompletionRequest $request
     *
     * @return RunCompletionResponse
     */
    public function runCompletion($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }

    /**
     * CCAI服务面API.
     *
     * @param request - RunCompletionMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunCompletionMessageResponse
     *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RunCompletionMessageResponse
     */
    public function runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        if (null !== $request->modelCode) {
            @$body['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCompletionMessage',
            'version'     => '2024-06-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . URL::percentEncode($workspaceId) . '/ccai/app/' . URL::percentEncode($appId) . '/completion_message',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunCompletionMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCompletionMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * CCAI服务面API.
     *
     * @param request - RunCompletionMessageRequest
     * @returns RunCompletionMessageResponse
     *
     * @param string                      $workspaceId
     * @param string                      $appId
     * @param RunCompletionMessageRequest $request
     *
     * @return RunCompletionMessageResponse
     */
    public function runCompletionMessage($workspaceId, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runCompletionMessageWithOptions($workspaceId, $appId, $request, $headers, $runtime);
    }
}
