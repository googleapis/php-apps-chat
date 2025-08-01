<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START chat_v1_generated_ChatService_CreateReaction_sync]
use Google\ApiCore\ApiException;
use Google\Apps\Chat\V1\Client\ChatServiceClient;
use Google\Apps\Chat\V1\CreateReactionRequest;
use Google\Apps\Chat\V1\Emoji;
use Google\Apps\Chat\V1\Reaction;

/**
 * Creates a reaction and adds it to a message. For an example, see
 * [Add a reaction to a
 * message](https://developers.google.com/workspace/chat/create-reactions).
 *
 * Requires [user
 * authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-user)
 * with one of the following [authorization
 * scopes](https://developers.google.com/workspace/chat/authenticate-authorize#chat-api-scopes):
 *
 * - `https://www.googleapis.com/auth/chat.messages.reactions.create`
 * - `https://www.googleapis.com/auth/chat.messages.reactions`
 * - `https://www.googleapis.com/auth/chat.messages`
 * - `https://www.googleapis.com/auth/chat.import` (import mode spaces only)
 *
 * @param string $formattedParent The message where the reaction is created.
 *
 *                                Format: `spaces/{space}/messages/{message}`
 *                                Please see {@see ChatServiceClient::messageName()} for help formatting this field.
 */
function create_reaction_sample(string $formattedParent): void
{
    // Create a client.
    $chatServiceClient = new ChatServiceClient();

    // Prepare the request message.
    $reactionEmoji = new Emoji();
    $reaction = (new Reaction())
        ->setEmoji($reactionEmoji);
    $request = (new CreateReactionRequest())
        ->setParent($formattedParent)
        ->setReaction($reaction);

    // Call the API and handle any network failures.
    try {
        /** @var Reaction $response */
        $response = $chatServiceClient->createReaction($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = ChatServiceClient::messageName('[SPACE]', '[MESSAGE]');

    create_reaction_sample($formattedParent);
}
// [END chat_v1_generated_ChatService_CreateReaction_sync]
