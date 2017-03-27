[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/HipChat/functions?utm_source=RapidAPIGitHub_HipChatFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# HipChat Package
Connect to the HipChat Enterprise Messaging API to build bots or slash commands for this enterprise chat app. Test an API call and export the code snippet.
* Domain: [hipchat.com](https://hipchat.com/)

## HipChat.getAccessToken
Gets an OAuth token for requested grant type.

| Field      | Type  | Description
|------------|-------|----------
| code       | String| The authorization code to exchange for an access token.
| userId     | String| The id of the user the token is acting on behalf of.
| clientName | String| The name of the public oauth client retrieving a token for.
| redirectUri| String| The URL that was used to generate an authorization code, and it must match that value.
| scope      | String| A space-delimited list of scopes that is requested.
| groupId    | String| The name of the group to which the related user belongs.

## HipChat.getCapabilities
Gets the capabilities descriptor.

No arguments.

## HipChat.getAddonCapabilitiesSchema
Gets the addon capabilities descriptor schema.

| Field| Type  | Description
|------|-------|----------
| draft| String| The json schema draft version to use. One of: v2, v4.

## HipChat.getEmoticon
Get emoticon details.

| Field          | Type  | Description
|----------------|-------|----------
| authToken      | String| API access token.
| emoticonIdOrKey| String| The id or shortcut of the emoticon.

## HipChat.getAllEmoticons
Gets all emoticons for the current group.

| Field     | Type  | Description
|-----------|-------|----------
| authToken | String| API access token.
| startIndex| Number| The start index for the result set.
| maxResults| Number| The maximum number of results.
| type      | String| The type of emoticons to get. One of: global, group, all.

## HipChat.getGlobalAction
Retrieve a global action.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this action.

## HipChat.createGlobalAction
Create a global action.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| key          | String| Unique key to identify this action.
| targetOptions| JSON  | JSON Object containing options which vary based on the type of target.
| targetKey    | String| The key of a dialog glance or web panel that should be opened in response to this action.
| weight       | Number| Determines the order in which the action appears in menu or list.
| location     | String| The location of this action. One of: hipchat.message.action, hipchat.input.action.
| conditions   | Array | Array of JSON objects of conditions determine whether this action is shown A mixed array of the following types.
| nameI18n     | String| The optional localization key used to look up the localized value.
| nameValue    | String| The default text.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": [{
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		}],
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteGlobalAction
Delete a global action.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this action.

## HipChat.getGlobalDialog
Retrieve a global dialog.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this dialog.

## HipChat.createGlobalDialog
Create a global dialog.

| Field                        | Type   | Description
|------------------------------|--------|----------
| authToken                    | String | API access token.
| key                          | String | Unique key to identify this dialog.
| url                          | String | The url where the dialog content is hosted.
| authentication               | String | The authentication method for this dialog. One of: jwt, none.
| optionsStyle                 | String | The dialog style. One of: normal, warning.
| optionsHintI18n              | String | The optional localization key used to look up the localized value.
| optionsHintValue             | String | The default text.
| optionsFilterPlaceholderI18n | String | The optional localization key used to look up the localized value.
| optionsFilterPlaceholderValue| String | The default text.
| optionsPrimaryActionEnabled  | Boolean| Whether button is disabled or enabled.
| optionsPrimaryActionNameI18n | String | The optional localization key used to look up the localized value.
| optionsPrimaryActionNameValue| String | The default text.
| optionsPrimaryActionKey      | String | A key that can be used to register an event listener.
| optionsSecondaryActions      | Array  | Array of JSON objects of secondary actions of the dialog rendered as link buttons.
| optionsSizeWidth             | String | The width of the dialog either in pixels px or as a percentage.
| optionsSizeHeight            | String | The height of the dialog either in pixels px or as a percentage.
| titleI18n                    | String | The optional localization key used to look up the localized value.
| titleValue                   | String | The default text.

#### Example of 'optionsSecondaryActions' field
```json
[{
	"enabled": false,
	"name": {
		"i18n": "nameI18n",
		"value": "nameValue"
	},
	"key": "key"
}]
```

## HipChat.deleteGlobalDialog
Delete a global.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this dialog.

## HipChat.getGlobalExternalPage
Retrieve a global external page.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this external page.

## HipChat.createGlobalExternalPage
Create a global external page.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this external page.
| url      | String| The URL of the external page.
| nameI18n | String| The optional localization key used to look up the localized value.
| nameValue| String| The default text.

## HipChat.deleteGlobalExternalPage
Delete a global external page.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this external page.

## HipChat.getGlobalGlance
Retrieve a global glance.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this glance.

## HipChat.createGlobalGlance
Create a global glance.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| key          | String| Unique key to identify this glance.
| targetOptions| JSON  | JSON Object containing options which vary based on the type of target.
| targetKey    | String| The key of a dialog glance or web panel that should be opened in response to this action.
| weight       | Number| Determines the order in which glances appear Glances are displayed top to bottom in order of ascending weight.
| queryUrl     | String| The URL of the resource providing the glance content.
| iconUrl      | String| Url for the icon.
| iconUrl2x    | String| Url for the retina version of the icon.
| conditions   | Array | Array of JSON objects of conditions determine whether this glance is shown.
| nameI18n     | String| The optional localization key.
| nameValue    | String| The display name of the glance text.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": [{
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		}],
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteGlobalGlance
Delete a global glance.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this glance.

## HipChat.getGlobalWebPanel
Retrieve a global web panel.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this web panel.

## HipChat.createGlobalWebPanel
Create a global web panel.

| Field         | Type  | Description
|---------------|-------|----------
| authToken     | String| API access token.
| key           | String| Unique key to identify this web panel.
| nameI18n      | String| Localization key used to look up the localized value.
| nameValue     | String| The display name of the webPanel.
| weight        | Number| Determines the order in which webPanel appear.
| url           | String| The URL of the resource providing the view content.
| authentication| String| The authentication method for this webpanel. One of: jwt, none.
| location      | String| The location of this webPanel. One of: hipchat, sidebar, right.
| conditions    | Array | Array of JSON objects of conditions determine whether this web panel is shown.
| iconUrl       | String| Url for the icon to display on the left side of the webPanel title.
| iconUrl2x     | String| Url for the retina version of the icon to display on the left side of the webPanel title.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": [{
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		}],
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteGlobalWebPanel
Delete a global web panel.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this web panel.

## HipChat.getGlobalWebhook
Retrieve a global webhook.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this webhook.

## HipChat.createGlobalWebhook
Create a global webhook.

| Field         | Type  | Description
|---------------|-------|----------
| authToken     | String| API access token.
| key           | String| Unique key to identify this webhook.
| name          | String| The label for this webhook.
| url           | String| The URL to send the webhook POST to.
| pattern       | String| The regular expression pattern to match against messages.
| authentication| String| The authentication method for this webhook. One of: jwt, none.
| key           | String| Unique key to identify this webhook.
| event         | String| The event to listen for. One of: room_archived, room_created, room_deleted, room_enter, room_exit, room_file_upload, room_message, room_notification, room_topic_change, room_unarchived.

## HipChat.deleteGlobalWebhook
Delete a global webhook.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| key      | String| Unique key to identify this webhook.

## HipChat.getGroup
Get a group's details.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| groupId  | String| The id of the group to view.

## HipChat.getGroupAvatar
Gets a group avatar.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| groupId  | String| The id of the group.

## HipChat.updateGroupAvatar
Update a group avatar.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| groupId  | String| The id of the group.
| avatar   | File  | The group avatar.

## HipChat.deleteGroupAvatar
Delete group avatar.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| groupId  | String| The id of the group.

## HipChat.getGroupStatistics
Get a group's details.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| groupId  | String| The id of the group to view.

## HipChat.getIntegrationInstallableData
Get integration installable data This resource is only useful for integration installations that provide the integration with the installable data URL. Will be deleted after first access.

| Field             | Type  | Description
|-------------------|-------|----------
| token             | Number| The one time use token for accessing installable information.
| integrationIdOrKey| Number| The id or key of the integration.

## HipChat.invokeIntegrationLink
Access an integration link.

| Field| Type  | Description
|------|-------|----------
| token| String| The allocated token of the link to be accessed.

## HipChat.deleteIntegrationLink
Delete a link endpoint by its token.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| token    | String| The allocated token returned when the link was created.

## HipChat.createIntegrationLink
Create a link target through which an integration can be reached through HipChat. A token will be returned which is used to access the link.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| target   | String| The address of the endpoint which will be invoked when the link is accessed.
| ttl      | Number| The lifetime of the link token.

## HipChat.pushUIChangesToGroup
Push addon ui update to a group.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| glance   | Array | Array of JSON objects of glances to update.

#### Example of 'glance' field
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"type": "default",
				"label": "label"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```
##### or
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"url": "https://logo.clearbit.com/hipchat.com?s=128",
				"url@2x": "https://logo.clearbit.com/hipchat.com?s=128"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```

## HipChat.pushUIChangesToRoom
Push addon ui update to a room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| Number| The id or url encoded name of the room to push the ui updates.
| glance      | Array | Array of JSON objects of glances to update.

#### Example of 'glance' field
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"type": "default",
				"label": "label"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```
##### or
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"url": "https://logo.clearbit.com/hipchat.com?s=128",
				"url@2x": "https://logo.clearbit.com/hipchat.com?s=128"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```

## HipChat.pushUIChangesToUserInRoom
Push addon ui update to a single user in a room.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| userIdOrEmail| Number| The id or email of the user to push the ui updates.
| roomIdOrName | Number| The id or url encoded name of the room to push the ui updates.
| glance       | Array | Array of JSON objects of glances to update.

#### Example of 'glance' field
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"type": "default",
				"label": "label"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```
##### or
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"url": "https://logo.clearbit.com/hipchat.com?s=128",
				"url@2x": "https://logo.clearbit.com/hipchat.com?s=128"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```

## HipChat.pushUIChangesToUser
Push addon ui update to a user.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| userIdOrName| Number| The id or name of the user to push the ui updates.
| glance      | Array | Array of JSON objects of glances to update.

#### Example of 'glance' field
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"type": "default",
				"label": "label"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```
##### or
```json
[{
	"content": {
		"status": {
			"type": "lozenge",
			"value": {
				"url": "https://logo.clearbit.com/hipchat.com?s=128",
				"url@2x": "https://logo.clearbit.com/hipchat.com?s=128"
			}
		},
		"metadata": "metadata",
		"label": {
			"type": "html",
			"value": "value"
		}
	},
	"key": "key"
}]
```

## HipChat.inviteUserToGroup
Invites a user to join a group.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| title    | String| The invited user's title.
| email    | String| Email to sent the invite to.
| name     | String| The invited user's full name.

## HipChat.getAutoJoinRooms
Get the list of rooms a user joins when they log in.

| Field     | Type  | Description
|-----------|-------|----------
| authToken | String| API access token.
| idOrEmail | String| The id, email address, or mention name (beginning with an @) of the user to retrieve rooms.
| startIndex| Number| The start index for the result set.
| maxResults| Number| The maximum number of results. In range: 0-1000.

## HipChat.getAllUsers
List all users in the group.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| startIndex    | Number | The start index for the result set.
| maxResults    | Number | The maximum number of results. In range: 0-1000.
| includeGuests | Boolean| Include active guest users in response.
| includeDeleted| Boolean| Include deleted users in response.

## HipChat.createUser
Creates a new user.

| Field       | Type   | Description
|-------------|--------|----------
| authToken   | String | API access token.
| name        | String | User's full name.
| roles       | Array  | Array of Strings, of list, of roles for the user.
| title       | String | User's title.
| mentionName | String | User's @mention name.
| isGroupAdmin| Boolean| Whether or not this user is an admin.
| timezone    | String | User's timezone Must be a supported timezone.
| password    | String | User's password.
| email       | String | User's email.

## HipChat.getUser
Get a user's details.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrEmail| String| The id, email address, or mention name (beginning with an @) of the user to view.

## HipChat.updateUser
Update a user. A guest cannot be updated.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| idOrEmail     | String | The id email address or mention name (beginning with an @) of the user to update.
| name          | String | User's full name.
| roles         | String | Comma-separated list of roles for the user.
| title         | String | User's title.
| presenceStatus| String | Presence status message of the user.
| presenceShow  | String | Presence status to show for the user.
| mentionName   | String | User's mention name.
| isGroupAdmin  | Boolean| Whether or not this user is an admin.
| timezone      | String | User's timezone.
| password      | String | User's password.
| email         | String | User's email.

## HipChat.deleteUser
Delete a user.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrEmail| String| The id, email address, or mention name (beginning with an @) of the user to delete.

## HipChat.getPrivatechatMessage
Fetch one specific message by id.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| messageId     | String | The id of the message to retrieve.
| idOrName      | String | The id or url encoded name of the room.
| timezone      | String | Your timezone. Must be a supported timezone.
| includeDeleted| Boolean| Include records about deleted messages into results.

## HipChat.getPrivatechatHistory
Fetch chat history for the 1:1 chat with the user identified by id or email.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| idOrEmail     | String | The id or email of the user.
| maxResults    | Number | The maximum number of messages to return. In range: 0-1000.
| reverse       | Boolean| Reverse the output such that the oldest message is first.
| startIndex    | Number | The offset for the messages to return.
| includeDeleted| Boolean| Include records about deleted messages into results.
| date          | String | Either the latest date to fetch history for in ISO-8601 format, or 'recent' to fetch the latest 75 messages.
| timezone      | String | Your timezone. Must be a supported timezone name, please see wikipedia TZ database page.
| endDate       | String | Either the earliest date to fetch history for in ISO-8601 format, or 'null' to disable this filter.

## HipChat.getRecentPrivatechatHistory
Fetch latest chat history for the 1:1 chat with the user identified by id or email.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| idOrEmail     | String | The id or email of the user.
| maxResults    | Number | The maximum number of messages to return. In range: 0-1000.
| timezone      | String | Your timezone. Must be a supported timezone.
| includeDeleted| Boolean| Include records about deleted messages into results.
| notBefore     | String | The id of the message that is oldest in the set of messages to be returned.

## HipChat.sendPrivateMessage
Sends a user a private message. This API can only be called using a user token.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| idOrEmail    | String| The id, email address, or mention name (beginning with an @) of the user to send a message to.
| message      | String| The message body.
| notify       | String| Whether this message should trigger a user notification.
| messageFormat| String| Determines how the message is treated by our server and rendered inside HipChat applications. One of: html, text.

## HipChat.getPhoto
Gets a user photo.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| size     | String| The size to retrieve. One of: small, big.
| idOrEmail| String| The id, email address, or mention name (beginning with an @) of the user.

## HipChat.updatePhoto
Update a user photo. A guest cannot be updated.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrEmail| String| The id, email address, or mention name (beginning with an @) of the user to update.
| photo    | String| The user photo as a base64 encoded string.

## HipChat.deletePhoto
Delete a user photo. A guest cannot be updated.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrEmail| String| The id, email address, or mention name (beginning with an @) of the user to update.

## HipChat.shareFileWithUser
Share a file with another user.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrName | String| The id or email of user to send the file to.
| file     | File  | File to share.
| message  | String| The message.

## HipChat.shareLinkWithUser
Share a link with another user.

| Field    | Type  | Description
|----------|-------|----------
| authToken| String| API access token.
| idOrName | String| The id or email of user to send the link to.
| message  | String| The message.
| link     | String| An absolute link to share.

## HipChat.getRoom
Get room details.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.

## HipChat.updateRoom
Updates a room.

| Field                  | Type   | Description
|------------------------|--------|----------
| authToken              | String | API access token.
| roomIdOrName           | String | The id or url encoded name of the room.
| name                   | String | Name of the room.
| privacy                | String | Whether the room is available for access by other users or not. One of: public, private.
| isArchived             | Boolean| Whether the room should be archived or not.
| isGuestAccessible      | Boolean| Whether or not to enable guest access for this room.
| topic                  | String | The new topic for the room.
| ownerId                | String | User ID or email address of the room's owner.
| delegateAdminVisibility| Boolean| Whether the room is visible to delegate admins.

## HipChat.deleteRoom
Deletes a room and kicks the current participants.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.

## HipChat.getAllRooms
List non archived rooms for this group.

| Field          | Type   | Description
|----------------|--------|----------
| authToken      | String | API access token.
| startIndex     | Number | The start index for the result set.
| maxResults     | Number | The maximum number of results. In range: 0-1000.
| includePrivate | Boolean| Filter out private rooms.
| includeArchived| Boolean| Filter rooms.

## HipChat.createRoom
Creates a new room.

| Field                  | Type   | Description
|------------------------|--------|----------
| authToken              | String | API access token.
| name                   | String | Name of the room.
| privacy                | String | Whether the room is available for access by other users or not. One of: public, private.
| delegateAdminVisibility| Boolean| Whether the room is visible to delegate admins.
| topic                  | String | The topic for the new room.
| ownerUserId            | String | The id, email address, or mention name (beginning with an @) of the room's owner.
| guestAccess            | Boolean| Whether or not to enable guest access for this room.

## HipChat.getRoomAction
Retrieve an action.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this action.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomAction
Create an action.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| key          | String| Unique key to identify this action.
| roomIdOrName | String| The id of the room.
| targetOptions| JSON  | JSON Object containing options which vary based on the type of target.
| targetKey    | String| The key of a dialog glance or web panel that should be opened in response to this action.
| weight       | Number| Determines the order in which the action appears in menu or list.
| location     | String| The location of this action. One of: hipchat.message.action, hipchat.input.action.
| conditions   | Array | Array of JSON objects of conditions determine whether this action is shown.
| nameI18n     | String| Localization key used to look up the localized value.
| nameValue    | String| The display name of the action.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": [{
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		}],
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteRoomAction
Delete an action.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this action.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomDialog
Retrieve a dialog.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this dialog.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomDialog
Create a dialog.

| Field                        | Type   | Description
|------------------------------|--------|----------
| authToken                    | String | API access token.
| key                          | String | Unique key to identify this dialog.
| roomIdOrName                 | String | The id of the room.
| url                          | String | The url where the dialog content is hosted.
| authentication               | String | The authentication method for this dialog. One of: jwt, none.
| optionsStyle                 | String | The dialog style. One of: normal, warning.
| optionsHintI18n              | String | Localization key used to look up the localized value.
| optionsHintValue             | String | The dialog hint, default text.
| optionsFilterPlaceholderI18n | String | Filter box placeholder text localization key used to look up the localized value.
| optionsFilterPlaceholderValue| String | filter box placeholder default text.
| optionsPrimaryActionEnabled  | Boolean| Whether button of primary action is disabled or enabled.
| optionsPrimaryActionNameI18n | String | Primary action button localization key used to look up the localized value.
| optionsPrimaryActionNameValue| String | Primary action button default text.
| optionsPrimaryActionKey      | String | A key that can be used to register an event listener.
| optionsSecondaryActions      | Array  | Array of JSON objects of secondary actions of the dialog, rendered as link buttons.
| optionsSizeWidth             | String | The width of the dialog either in pixels px or as a percentage.
| optionsSizeHeight            | String | The height of the dialog either in pixels px or as a percentage.
| titleI18n                    | String | The dialog title localization key used to look up the localized value.
| titleValue                   | String | The dialog title default text.

#### Example of 'optionsSecondaryActions' field
```json
[{
	"enabled": false,
	"name": {
		"i18n": "i18n",
		"value": "value"
	},
	"key": "key"
}]
```

## HipChat.deleteRoomDialog
Delete a dialog.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this dialog.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomExternalPage
Retrieve an external page.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this external page.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomExternalPage
Create an external page.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this external page.
| roomIdOrName| String| The id of the room.
| url         | String| The URL of the external page.
| nameValue   | String| The display name of the external page.
| nameI18n    | String| The optional localization key used to look up the localized value.

## HipChat.deleteRoomExternalPage
Delete an external page.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this external page.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomGlance
Retrieve a glance.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this glance.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomGlance
Create a glance.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| key          | String| Unique key to identify this glance.
| roomIdOrName | String| The id of the room.
| targetOptions| JSON  | JSON Object of options which vary based on the type of target.
| targetKey    | String| The key of a dialog glance or web panel that should be opened in response to this action.
| weight       | Number| Determines the order in which glances appear. Glances are displayed top to bottom in order of ascending weight.
| queryUrl     | String| The URL of the resource providing the glance content.
| iconUrl      | String| Url for the icon to display on the left side of the glance.
| iconUrl2x    | String| Url for the retina version of the icon to display on the left side of the glance.
| conditions   | Array | Array of JSON objects of conditions determine whether this glance is shown.
| nameI18n     | String| Display name of the glance localization key used to look up the localized value.
| nameValue    | String| The display name of the glance default text.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": [{
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		}],
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteRoomGlance
Delete a glance.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this glance.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomWebPanel
Retrieve a web panel.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this web panel.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomWebPanel
Create a web panel.

| Field         | Type  | Description
|---------------|-------|----------
| authToken     | String| API access token.
| key           | String| Unique key to identify this web panel.
| roomIdOrName  | String| The id of the room.
| nameI18n      | String| Display name of the webPanel localization key used to look up the localized value.
| nameValue     | String| Display name of the webPanel default text.
| weight        | Number| Determines the order in which webPanel appear. Web panels are displayed top to bottom or left to right in order of ascending weight.
| url           | String| The URL of the resource providing the view content.
| authentication| String| The authentication method for this webpanel. One of: jwt, none.
| location      | String| The location of this webPanel. One of: hipchat, sidebar, right.
| conditions    | Array | Array of JSON objects of conditions determine whether this web panel is shown.
| iconUrl       | String| Url for the icon to display on the left side of the webPanel title.
| iconUrl2x     | String| Url for the retina version of the icon to display on the left side of the webPanel title.

#### Example of 'conditions' field
```json
[{
	"invert": false,
	"params": {},
	"condition": "room_is_public",
	"conditions": [{
		"invert": false,
		"params": {},
		"condition": "room_is_public",
		"conditions": {
			"invert": false,
			"params": {},
			"condition": "room_is_public"
		},
		"type": "and"
	}],
	"type": "and"
}]
```

## HipChat.deleteRoomWebPanel
Delete a web panel.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this web panel.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomWebhook
Retrieve a webhook.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this webhook.
| roomIdOrName| String| The id of the room.

## HipChat.createRoomWebhook
Create a webhook.

| Field         | Type  | Description
|---------------|-------|----------
| authToken     | String| API access token.
| key           | String| Unique key to identify this webhook.
| roomIdOrName  | String| The id of the room.
| name          | String| The label for this webhook.
| url           | String| The URL to send the webhook POST to.
| pattern       | String| The regular expression pattern to match against messages Only applicable for message events.
| authentication| String| The authentication method for this webhook. One of: jwt, none.
| event         | String| The event to listen for. One of: room_archived, room_created, room_deleted, room_enter, room_exit, room_file_upload, room_message, room_notification, room_topic_change, room_unarchived.

## HipChat.deleteRoomWebhook
Delete a webhook.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| key         | String| Unique key to identify this webhook.
| roomIdOrName| String| The id of the room.

## HipChat.getRoomMessage
Fetch one specific message by id.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| messageId     | String | The id of the message to retrieve.
| roomIdOrName  | String | The id or url encoded name of the room.
| timezone      | String | Your timezone. Must be a supported timezone.
| includeDeleted| Boolean| Include records about deleted messages into results.

## HipChat.getRoomHistory
Fetch chat history for this room.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| roomIdOrName  | String | The id or url encoded name of the room.
| maxResults    | Number | The maximum number of messages to return. In range: 0-1000.
| reverse       | Boolean| Reverse the output such that the oldest message is first.
| startIndex    | Number | The offset for the messages to return.
| includeDeleted| Boolean| Include records about deleted messages into results.
| date          | String | Either the latest date to fetch history for in ISO-8601 format.
| timezone      | String | Your timezone.
| endDate       | String | Either the earliest date to fetch history for the ISO-8601 format.

## HipChat.getRecentRoomHistory
Fetch latest chat history for this room.

| Field         | Type   | Description
|---------------|--------|----------
| authToken     | String | API access token.
| roomIdOrName  | String | The id or url encoded name of the room.
| maxResults    | Number | The maximum number of messages to return. In range: 0-1000.
| timezone      | String | Your timezone.
| includeDeleted| Boolean| Include records about deleted messages into results.
| notBefore     | String | The id of the message that is oldest in the set of messages to be returned.

## HipChat.inviteUserToRoom
Invite a user to a public room.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| userIdOrEmail| String| The id, email address, or mention name (beginning with an @) of the user to invite.
| roomIdOrName | String| The id or url encoded name of the room.
| reason       | String| The reason to give to the invited user.

## HipChat.addMemberToRoom
Adds a member to a private room and sends member's unavailable presence to all room members asynchronously.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| userIdOrEmail| Number| The id, email address, or mention name (beginning with an @) of the user.
| roomIdOrName | String| The id or url encoded name of the room.
| roomRoles    | Array | Array of Strings. List of roles for the user within the room.

## HipChat.removeMemberFromRoom
Removes a member from a private room.

| Field        | Type  | Description
|--------------|-------|----------
| authToken    | String| API access token.
| userIdOrEmail| Number| The id, email address, or mention name (beginning with an @) of the user.
| roomIdOrName | String| The id or url encoded name of the room.

## HipChat.getRoomAllMembers
Gets all members for this private room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| startIndex  | Number| The start index for the result set.
| maxResults  | Number| The maximum number of results. In range: 0-1000.

## HipChat.sendMessageToRoom
Send a message to a room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| message     | String| The message.

## HipChat.sendRoomNotification
Send a message to a room.

| Field                | Type  | Description
|----------------------|-------|----------
| authToken            | String| API access token.
| roomIdOrName         | String| The id or url encoded name of the room.
| from                 | String| A label to be shown in addition to the sender's name.
| messageFormat        | String| Determines how the message is treated by our server and rendered inside HipChat applications.
| color                | String| Background color for message. One of: yellow, green, red, purple, gray, random.
| attachTo             | String| The message id to to attach this notification to, for example if this notification is in response to a particular message.
| notify               | String| Whether this message should trigger a user notification.
| message              | String| The message body.
| cardStyle            | String| Type of the card. One of: file, image, application, link, media.
| cardDescriptionValue | String| Card description in the specific format.
| cardDescriptionFormat| String| Card description format that can be html or text.
| cardFormat           | String| Application cards can be compact 1 to 2 lines or medium 1 to 5 lines.
| cardUrl              | String| The url where the card will open.
| cardTitle            | String| Card title of the card.
| cardThumbnailUrl     | String| The thumbnail url.
| cardThumbnailWidth   | Number| The original width of the image.
| cardThumbnailUrl2x   | String| The thumbnail url in retina.
| cardThumbnailHeight  | Number| The original height of the image.
| cardActivityHtml     | String| Html for the activity to show in one line a summary of the action that happened.
| cardActivityIconUrl  | String| The url where the icon is.
| cardActivityIconUrl2x| String| The url for the icon in retina.
| cardAttributes       | Array | Array of JSON objects of list of attributes to show below the card.
| cardId               | String| An id that will help HipChat recognise the same card when it is sent multiple times.
| cardIconUrl          | String| The url where the card icon is.
| cardIconUrl2x        | String| The url for the card icon in retina.

#### Example of 'cardAttributes' field
```json
[{
	"value": {
		"url": "http://127.0.0.1",
		"style": "lozenge-success",
		"label": "label",
		"icon": {
			"url": "https://logo.clearbit.com/hipchat.com?s=128",
			"url@2x": "https://logo.clearbit.com/hipchat.com?s=128"
		}
	},
	"label": "label"
}]
```

## HipChat.getRoomtAllParticipants
Gets all participants in this room.

| Field         | Type  | Description
|---------------|-------|----------
| authToken     | String| API access token.
| roomIdOrName  | String| The id or url encoded name of the room.
| startIndex    | Number| The start index for the result set.
| includeOffline| String| Filter users by status boolean.
| maxResults    | Number| The maximum number of results. In range: 0-1000.

## HipChat.replyToMessageInRoom
Reply to a message in a room.

| Field          | Type  | Description
|----------------|-------|----------
| authToken      | String| API access token.
| roomIdOrName   | String| The id or url encoded name of the room.
| parentMessageId| String| The id of the message you are replying to.
| message        | String| The message.

## HipChat.shareFileWithRoom
Share a file with the room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| file        | File  | File to share.
| message     | String| The message.

## HipChat.shareLinkWithRoom
Share a link with the room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| message     | String| The message.
| link        | String| An absolute link to share.

## HipChat.getRoomStatistics
Fetch statistics for this room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.

## HipChat.setRoomTopic
Set a room's topic. Useful for displaying statistics, important links, server status, you name it.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| topic       | String| The topic body.

## HipChat.getRoomAllWebhooks
Gets all webhooks for this room.

| Field       | Type  | Description
|-------------|-------|----------
| authToken   | String| API access token.
| roomIdOrName| String| The id or url encoded name of the room.
| startIndex  | Number| The start index for the result set.
| maxResults  | Number| The maximum number of results. In range: 0-1000.

## HipChat.getSession
Gets the OAuth session via its associated access_token.

| Field      | Type  | Description
|------------|-------|----------
| authToken  | String| API access token.
| accessToken| String| The OAuth accessToken.

## HipChat.deleteSession
Deletes the OAuth session via its associated access_token Authentication required Accessible by group clients room clients users.

| Field      | Type  | Description
|------------|-------|----------
| authToken  | String| API access token.
| accessToken| String| The OAuth accessToken.

