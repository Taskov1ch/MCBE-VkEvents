template = r"""<?php

namespace Taskovich\VkEvents\events;

final class {class_name} extends VkEvent
{{

	public function __construct(protected array $data)
	{{
		$this->name = "{class_name}";
	}}
	
}}
"""

events = [
	"MessageNewEvent",
	"MessageReplyEvent",
	"MessageEditEvent",
	"MessageAllowEvent",
	"MessageDenyEvent",
	"MessageTypingStateEvent",
	"MessageActionEvent",
	"PhotoNewEvent",
	"PhotoCommentNewEvent",
	"PhotoCommentEditEvent",
	"PhotoCommentRestoreEvent",
	"PhotoCommentDeleteEvent",
	"AudioNewEvent",
	"VideoNewEvent",
	"VideoCommentNewEvent",
	"VideoCommentEditEvent",
	"VideoCommentRestoreEvent",
	"VideoCommentDeleteEvent",
	"WallPostNewEvent",
	"WallRepostEvent",
	"WallReplyNewEvent",
	"WallReplyEditEvent",
	"WallReplyRestoreEvent",
	"WallReplyDeleteEvent",
	"LikeAddEvent",
	"LikeRemoveEvent",
	"BoardPostNewEvent",
	"BoardPostEditEvent",
	"BoardPostRestoreEvent",
	"BoardPostDeleteEvent",
	"MarketCommentNewEvent",
	"MarketCommentEditEvent",
	"MarketCommentRestoreEvent",
	"MarketCommentDeleteEvent",
	"MarketOrderNewEvent",
	"MarketOrderEditEvent",
	"GroupLeaveEvent",
	"GroupJoinEvent",
	"UserBlockEvent",
	"UserUnblockEvent",
	"PollVoteNewEvent",
	"GroupOfficersEditEvent",
	"GroupChangeSettingsEvent",
	"GroupChangePhotoEvent",
	"VkpayTransactionEvent",
	"AppPayloadEvent",
	"DonutSubscriptionCreateEvent",
	"DonutSubscriptionProlongedEvent",
	"DonutSubscriptionExpiredEvent",
	"DonutSubscriptionCancelledEvent",
	"DonutSubscriptionPriceChangedEvent",
	"DonutMoneyWithdrawEvent",
	"DonutMoneyWithdrawErrorEvent"
]

for event in events:
	content = template.format(class_name = event)
	file_name = f"{event}.php"
	
	with open(file_name, 'w') as file:
		file.write(content)
	
	print(f"Created file: {file_name}")
