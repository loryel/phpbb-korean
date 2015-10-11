<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* translation	2015~ minwook shin @ https://github.com/minwook-shin/phpbb-korean
* Moderator Control Panel is not translated.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> '액션',
	'ACTION_NOTE'			=> '액션/노트',
	'ADD_FEEDBACK'			=> '피드백 추가',
	'ADD_FEEDBACK_EXPLAIN'	=> '만약 보고서를 추가하려면 다음과 같은 양식을 작성하십시오. 하지만 일반 텍스트를 사용하고 HTML, BBCode는 허용되지 않습니다.',
	'ADD_WARNING'			=> '주의 추가',
	'ADD_WARNING_EXPLAIN'	=> '이 사용자에게 경고를 보내려면 다음 양식을 작성하십시오. 하지만 일반 텍스트를 사용하고 HTML, BBCode는 허용되지 않습니다.',
	'ALL_ENTRIES'			=> '모든 항목',
	'ALL_NOTES_DELETED'		=> '성공적으로 모든 사용자 메모를 제거했습니다.',
	'ALL_REPORTS'			=> '모든 신고',
	'ALREADY_REPORTED'		=> '이 게시물이 이미 신고되어 있습니다.',
	'ALREADY_REPORTED_PM'	=> '이 쪽지는 이미 신고되어 있습니다.',
	'ALREADY_WARNED'		=> '경고가 이미 이 게시물에 대해 이슈되었습니다.',
	'APPROVE'				=> '승인',
	'APPROVE_POST'			=> '승인 게시물',
	'APPROVE_POST_CONFIRM'	=> '이 게시물을 승인 하시겠습니까?',
	'APPROVE_POSTS'			=> '승인 게시물들',
	'APPROVE_POSTS_CONFIRM'	=> '당신이 선택한 게시물을 승인 하시겠습니까?',
	'APPROVE_TOPIC'			=> '승인 글타래',
	'APPROVE_TOPIC_CONFIRM'	=> '당신은 이 글타래을 승인 하시겠습니까?',
	'APPROVE_TOPICS'		=> '승인 글타래들',
	'APPROVE_TOPICS_CONFIRM'=> '당신은 선택한 글타래들을 승인 하시겠습니까?',

	'CANNOT_MOVE_SAME_FORUM'=> '당신은 이미 포럼 글타래를 이동할 수 없습니다.',
	'CANNOT_WARN_ANONYMOUS'	=> '당신은 등록되지 않은 손님를 사용자 경고에 표시 할 수 없습니다.',
	'CANNOT_WARN_SELF'		=> '당신은 자신의 경고를 표시 할 수 없습니다.',
	'CAN_LEAVE_BLANK'		=> '이 작업은 비워 둘 수 있습니다.',
	'CHANGE_POSTER'			=> '포스터 변경',
	'CLOSE_PM_REPORT'		=> '개인 메시지 보고서 닫기',
	'CLOSE_PM_REPORT_CONFIRM'	=> '정말로 선택한 개인 메시지 보고서를 딛겠습니까?',
	'CLOSE_PM_REPORTS'		=> '개인 메시지 보고서 닫기',
	'CLOSE_PM_REPORTS_CONFIRM'	=> '당신은 선택한 개인 메시지 보고서를 닫기를 원합니까?',
	'CLOSE_REPORT'			=> '보고서 닫기',
	'CLOSE_REPORT_CONFIRM'	=> '정말로 선택된 보고서를 닫겠습니까?',
	'CLOSE_REPORTS'			=> '보고서들 닫기',
	'CLOSE_REPORTS_CONFIRM'	=> '선택된 보고서를 닫는것을 원합니까?',

	'DELETE_PM_REPORT'			=> '개인 메시지 보고서 삭제',
	'DELETE_PM_REPORT_CONFIRM'	=> '당신은 선택한 개인 메시지 보고서를 삭제 하시겠습니까?',
	'DELETE_PM_REPORTS'			=> '개인 메시지 보고서들 삭제',
	'DELETE_PM_REPORTS_CONFIRM'	=> '당신이 선택한 개인 메시지 보고서를 삭제 하시겠습니까?',
	'DELETE_POSTS'				=> '글들 삭제',
	'DELETE_REPORT'				=> '보고서 삭제',
	'DELETE_REPORT_CONFIRM'		=> '당신은 선택한 보고서를 삭제하길 원합니까?',
	'DELETE_REPORTS'			=> '보고서 삭제',
	'DELETE_REPORTS_CONFIRM'	=> '당신이 선택한 보고서를 삭제 하시겠습니까?',
	'DELETE_SHADOW_TOPIC'		=> '그림자 글타래 삭제',
	'DELETE_TOPICS'				=> '선택된 글타래들 삭제',
	'DISAPPROVE'				=> '불허',
	'DISAPPROVE_REASON'			=> '불허된 이유',
	'DISAPPROVE_POST'			=> '비허가 글',
	'DISAPPROVE_POST_CONFIRM'	=> '정말로 이 글을 불허하시겠습니까?',
	'DISAPPROVE_POSTS'			=> '비허가 글들',
	'DISAPPROVE_POSTS_CONFIRM'	=> '정말로 선택된 이 글들을 불허히시겠습니까?',
	'DISPLAY_LOG'				=> '이전의 표시 항목',
	'DISPLAY_OPTIONS'			=> '옵션 표시',

	'EMPTY_REPORT'					=> '당신은 반드시 왜 선택했는지 설명을 넣어야합니다.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> '하나 또는 여러개의 글태래가 있거나 비어있었기 때문에 데이터 베이스로부터 제거되었습니다.',

	'FEEDBACK'				=> '피드백',
	'FORK'					=> '복사',
	'FORK_TOPIC'			=> '글타래 복사',
	'FORK_TOPIC_CONFIRM'	=> '정말로 글타래를 복사하시겠습니까?',
	'FORK_TOPICS'			=> '선택된 글타래들 복사',
	'FORK_TOPICS_CONFIRM'	=> '정말로 선택한 글타래들을 복사하시겠습니까?',
	'FORUM_DESC'			=> '설명',
	'FORUM_NAME'			=> '포럼 이름',
	'FORUM_NOT_EXIST'		=> '이 포럼에서 당신이 선택된것은 나갈수없습니다.',
	'FORUM_NOT_POSTABLE'	=> '이 포럼에서 당신이 선택된 이것에 글쓸수없습니다.',
	'FORUM_STATUS'			=> '포럼 상태',
	'FORUM_STYLE'			=> '포럼 스타일',

	'GLOBAL_ANNOUNCEMENT'	=> '전체 공지',

	'IP_INFO'				=> 'IP 주소 안내',
	'IPS_POSTED_FROM'		=> '이 유저의 IP 주소로부터 글씀',

	'LATEST_LOGS'				=> '마지막 기록된 5 행동',
	'LATEST_REPORTED'			=> '마지막 5 보고서',
	'LATEST_REPORTED_PMS'		=> '마지막 5 개인 메시지 보고서',
	'LATEST_UNAPPROVED'			=> '마지막 5 승인을 기다리는 글',
	'LATEST_WARNING_TIME'		=> '마지막 이슈된 경고',
	'LATEST_WARNINGS'			=> '마지막 5 경고',
	'LEAVE_SHADOW'				=> '숨겨진 글타래 안 장소 존재합니다',
	'LIST_REPORTS'				=> array(
		1	=> '%d 보고서',
		2	=> '%d 보고서들',
	),
	'LOCK'						=> '잠금',
	'LOCK_POST_POST'			=> '글 잠금',
	'LOCK_POST_POST_CONFIRM'	=> '이 게시물의 편집을 방지하시겠습니까?',
	'LOCK_POST_POSTS'			=> '선택된 게시물 잠금',
	'LOCK_POST_POSTS_CONFIRM'	=> '선택된 게시물들의 편집을 방지하시겠습니까?',
	'LOCK_TOPIC_CONFIRM'		=> '정말로 글타래를 잠그시겠습니까?',
	'LOCK_TOPICS'				=> '선택된 글타래들 잠금',
	'LOCK_TOPICS_CONFIRM'		=> '정말로 선택된 모든 글타래들을 잠그시겠습니까?',
	'LOGS_CURRENT_TOPIC'		=> '최근 로그 보기:',
	'LOGIN_EXPLAIN_MCP'			=> '이 포럼을 관리하려면 반드시 로그인 하십시오.',
	'LOGVIEW_VIEWTOPIC'			=> '글타래 보기',
	'LOGVIEW_VIEWLOGS'			=> '글타래 로그 보기',
	'LOGVIEW_VIEWFORUM'			=> '포럼 보기',
	'LOOKUP_ALL'				=> 'IP들 모두 찾기 ',
	'LOOKUP_IP'					=> 'IP 찾기',

	'MARKED_NOTES_DELETED'		=> '성공적으로 모든 마크된 유저 노트가 삭제되었습니다.',

	'MCP_ADD'						=> '경고 추가',

	'MCP_BAN'					=> '금지',
	'MCP_BAN_EMAILS'			=> '이메일들 금지',
	'MCP_BAN_IPS'				=> 'IP들 금지',
	'MCP_BAN_USERNAMES'			=> '유저 이름들 금지',

	'MCP_LOGS'						=> '관리 로그들',
	'MCP_LOGS_FRONT'				=> '첫 페이지',
	'MCP_LOGS_FORUM_VIEW'			=> '포럼 로그들',
	'MCP_LOGS_TOPIC_VIEW'			=> '글타래 로그들',

	'MCP_MAIN'						=> '메인',
	'MCP_MAIN_FORUM_VIEW'			=> '포럼보기',
	'MCP_MAIN_FRONT'				=> '첫 페이지',
	'MCP_MAIN_POST_DETAILS'			=> '자세한 게시물',
	'MCP_MAIN_TOPIC_VIEW'			=> '글타래 보기',
	'MCP_MAKE_ANNOUNCEMENT'			=> '“공지”를 수정',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> '“공지”글타래를 번경하시겠습니까?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> '“공지사항”을 수정',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '“공지 사항”글타래을 변경하시겠습니까?',
	'MCP_MAKE_GLOBAL'				=> '“전체 공지”를 수정',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> '“전체 공지”글타래를 변경하시겠습니까?',
	'MCP_MAKE_GLOBALS'				=> '“전체 공지”를 수정',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '“전체 공지사항"글타래를 변경 하시겠습니까?',
	'MCP_MAKE_STICKY'				=> '“고정”을 수정',
	'MCP_MAKE_STICKY_CONFIRM'		=> '“고정” 글타래를 변경하시겠습니까?',
	'MCP_MAKE_STICKIES'				=> '“여러 고정”을 수정',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '“여러 고정”글타래를 변경하시겠습니까?',
	'MCP_MAKE_NORMAL'				=> 'Modify to “표준 글타래”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> '“표준 글타래”글타래를 변경하시겠습니까?',
	'MCP_MAKE_NORMALS'				=> 'Modify to “표준 글타래”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> '“표준 글타래”글타래들을 변경하시겠습니까?',

	'MCP_NOTES'						=> '유저 노트',
	'MCP_NOTES_FRONT'				=> '첫 페이지',
	'MCP_NOTES_USER'				=> '유저 자세히',

	'MCP_POST_REPORTS'				=> '이 게시물에 보고된 이슈',

	'MCP_PM_REPORTS'				=> '보고된 개인 메시지들',
	'MCP_PM_REPORT_DETAILS'			=> '개인 메시지 자세한 보고',
	'MCP_PM_REPORTS_CLOSED'			=> '개인 메시지 보고서 닫기',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> '이것은 이전에 해결 된 개인 메시지에 대한 모든 보고서의 목록입니다.',
	'MCP_PM_REPORTS_OPEN'			=> '개인 메시지 보고서 열기',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> '이것은 처리 될 아직보고 된 모든 개인 메시지의 목록입니다.',

	'MCP_REPORTS'					=> '보고된 메시지',
	'MCP_REPORT_DETAILS'			=> '자세한 보고',
	'MCP_REPORTS_CLOSED'			=> '보고서 닫았음',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> '이것은 이전에 해결 된 게시물에 대한 모든 보고서의 목록입니다.',
	'MCP_REPORTS_OPEN'				=> '보고서 열기',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> '이것은 처리 될 아직보고 된 포스트들의 목록입니다.',

	'MCP_QUEUE'								=> '대기열 관리',
	'MCP_QUEUE_APPROVE_DETAILS'				=> '자세한 승인',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> '승인을 기다리는 게시물',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> '이것은 그들이 사용자에게 표시되기 전에 승인이 필요한 모든 글의 목록입니다',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> '승인을 기다리는 글타래',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> '그의 모든 글타래들 그들이 사용자에게 표시되기 전에 승인을 필요로하는 목록입니다.',
	'MCP_QUEUE_DELETED_POSTS'				=> '삭제된 게시물들',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> '이것은 모든 부드러운 삭제 게시물의 목록입니다. 당신은 복원하거나 영구적으로이 화면에서 게시물을 삭제할 수 있습니다.',
	'MCP_QUEUE_DELETED_TOPICS'				=> '글타래들 삭제됨',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> '이것은 부드럽게 글타래들이 삭제되었습니다. 이 화면에서 글타래를 영구적으로 삭제하거나 복원 할 수 있습니다.',

	'MCP_VIEW_USER'			=> '특정 유저에 대한 경고 보기',

	'MCP_WARN'				=> '경고',
	'MCP_WARN_FRONT'		=> '첫 페이지',
	'MCP_WARN_LIST'			=> '경고 리스트',
	'MCP_WARN_POST'			=> '특정 게시물에 대한 경고',
	'MCP_WARN_USER'			=> '경고 유저',

	'MERGE_POSTS_CONFIRM'	=> '정말로 선택한 게시물을 이동하시겠습니까?',
	'MERGE_TOPIC_EXPLAIN'	=> '다른 글타래에 선택한 게시물을 이동할 수 아래의 양식을 사용. 게시물이 글타래에서 분리하고 다른 글타래에 병합됩니다. 이 게시물은 다시 정렬되지 않고 사용자가 새로운 글타래에 게시하는 경우로 나타납니다.<br />대상 글타래 ID를 입력하거나 하나를 검색 "글타래 선택"을 클릭하십시오.',
	'MERGE_TOPIC_ID'		=> '대상 글타래 식별 번호',
	'MERGE_TOPICS'			=> '글타래들 병합',
	'MERGE_TOPICS_CONFIRM'	=> '정말로 선택한 글타래들을 병합하시겠습니까?',
	'MODERATE_FORUM'		=> '포럼 관리',
	'MODERATE_TOPIC'		=> '글타래 관리',
	'MODERATE_POST'			=> '게시물 관리',
	'MOD_OPTIONS'			=> '관리 옵션',
	'MORE_INFO'				=> '더많은 안내',
	'MOST_WARNINGS'			=> '대부분 경고를 받은 유저',
	'MOVE_TOPIC_CONFIRM'	=> '당신은 새 포럼으로 글타래를 이동 하시겠습니까?',
	'MOVE_TOPICS'			=> '많이 선택된 글타래들',
	'MOVE_TOPICS_CONFIRM'	=> '당신이 이동 하시겠습니까 선택한 글타래들 새로운 포럼에?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notify poster about approval?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notify poster about disapproval?',
	'NOTIFY_USER_WARN'				=> 'Notify user about warning?',
	'NOT_MODERATOR'					=> 'You are not a moderator of this forum.',
	'NO_DESTINATION_FORUM'			=> 'Please select a forum for destination.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'There is no destination forum available.',
	'NO_ENTRIES'					=> 'No log entries.',
	'NO_FEEDBACK'					=> 'No feedback exists for this user.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'You have to select a destination 글타래 for merging posts.',
	'NO_MATCHES_FOUND'				=> 'No matches found.',
	'NO_POST'						=> 'You have to select a post in order to warn the user for a post.',
	'NO_POST_REPORT'				=> 'This post was not reported.',
	'NO_POST_SELECTED'				=> 'You must select at least one post to perform this action.',
	'NO_POSTS_DELETED'				=> 'There are no deleted posts.',
	'NO_POSTS_QUEUE'				=> 'There are no posts waiting for approval.',
	'NO_REASON_DISAPPROVAL'			=> 'Please give an appropriate reason for disapproval.',
	'NO_REPORT'						=> 'No report found',
	'NO_REPORTS'					=> 'No reports found',
	'NO_REPORT_SELECTED'			=> 'You must select at least one report to perform this action.',
	'NO_TOPIC_ICON'					=> 'None',
	'NO_TOPIC_SELECTED'				=> 'You must select at least one 글타래 to perform this action.',
	'NO_TOPICS_DELETED'				=> 'There are no deleted 글타래들.',
	'NO_TOPICS_QUEUE'				=> 'There are no 글타래들 waiting for approval.',

	'ONLY_TOPIC'			=> 'Only 글타래 “%s”',
	'OTHER_USERS'			=> 'Other users posting from this IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s not allowed as quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'The selected PM report has been closed successfully.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'The selected PM report has been deleted successfully.',
	'PM_REPORTED_SUCCESS'		=> 'This private message has been successfully reported.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'The selected PM reports have been closed successfully.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'The selected PM reports have been deleted successfully.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'There are no PM reports to review.',
		1	=> 'In total there is <strong>1</strong> PM report to review.',
		2	=> 'In total there are <strong>%d</strong> PM reports to review.',
	),
	'PM_REPORT_DETAILS'			=> 'Private message report details',
	'POSTER'					=> 'Poster',
	'POSTS_APPROVED_SUCCESS'	=> 'The selected posts have been approved.',
	'POSTS_DELETED_SUCCESS'		=> 'The selected posts have been successfully removed from the database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'The selected posts have been disapproved.',
	'POSTS_LOCKED_SUCCESS'		=> 'The selected posts have been locked successfully.',
	'POSTS_MERGED_SUCCESS'		=> 'The selected posts have been merged.',
	'POSTS_PER_PAGE'			=> 'Posts per page',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts.)',
	'POSTS_RESTORED_SUCCESS'	=> 'The selected posts have been restored successfully.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'The selected posts have been unlocked successfully.',
	'POST_APPROVED_SUCCESS'		=> 'The selected post has been approved.',
	'POST_DELETED_SUCCESS'		=> 'The selected post has been successfully removed from the database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'The selected post has been disapproved.',
	'POST_LOCKED_SUCCESS'		=> 'Post locked successfully.',
	'POST_NOT_EXIST'			=> 'The post you requested does not exist.',
	'POST_REPORTED_SUCCESS'		=> 'This post has been successfully reported.',
	'POST_RESTORED_SUCCESS'		=> 'This post has been restored successfully.',
	'POST_UNLOCKED_SUCCESS'		=> 'Post unlocked successfully.',

	'READ_USERNOTES'			=> 'User notes',
	'READ_WARNINGS'				=> 'User warnings',
	'REPORTER'					=> 'Reporter',
	'REPORTED'					=> 'Reported',
	'REPORTED_BY'				=> 'Reported by',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'The selected reports have been closed successfully.',
	'REPORTS_DELETED_SUCCESS'	=> 'The selected reports have been deleted successfully.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'There are no reports to review.',
		1	=> 'In total there is <strong>1</strong> report to review.',
		2	=> 'In total there are <strong>%d</strong> reports to review.',
	),
	'REPORT_CLOSED'				=> 'This report has already been closed.',
	'REPORT_CLOSED_SUCCESS'		=> 'The selected report has been closed successfully.',
	'REPORT_DELETED_SUCCESS'	=> 'The selected report has been deleted successfully.',
	'REPORT_DETAILS'			=> 'Report details',
	'REPORT_MESSAGE'			=> 'Report this message',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected private message. Reporting should generally be used only if the message breaks forum rules. <strong>Reporting a private message will make its contents visible to all moderators.</strong>',
	'REPORT_NOTIFY'				=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with.',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'Report reason',
	'REPORT_TIME'				=> 'Report time',
	'RESTORE'					=> 'Restore',
	'RESTORE_POST'				=> 'Restore post',
	'RESTORE_POST_CONFIRM'		=> 'Are you sure you want to restore this post?',
	'RESTORE_POSTS'				=> 'Restore posts',
	'RESTORE_POSTS_CONFIRM'		=> 'Are you sure you want to restore the selected posts?',
	'RESTORE_TOPIC'				=> 'Restore 글타래',
	'RESTORE_TOPIC_CONFIRM'		=> 'Are you sure you want to restore this 글타래?',
	'RESTORE_TOPICS'			=> 'Restore 글타래들',
	'RESTORE_TOPICS_CONFIRM'	=> 'Are you sure you want to restore the selected 글타래들?',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sReturn to the message%s',
	'RETURN_NEW_FORUM'			=> '%sGo to the new forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGo to the new 글타래%s',
	'RETURN_PM'					=> '%sReturn to the private message%s',
	'RETURN_POST'				=> '%sReturn to the post%s',
	'RETURN_QUEUE'				=> '%sReturn to the queue%s',
	'RETURN_REPORTS'			=> '%sReturn to the reports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReturn to the 글타래%s',

	'SEARCH_POSTS_BY_USER'				=> 'Search posts by',
	'SELECT_ACTION'						=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected 글타래들 are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'						=> 'Select for merge',
	'SELECT_TOPICS_FROM'				=> 'Select 글타래들 from',
	'SELECT_TOPIC'						=> 'Select 글타래',
	'SELECT_USER'						=> 'Select user',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'Date',
	'SORT_IP'							=> 'IP address',
	'SORT_WARNINGS'						=> 'Warnings',
	'SPLIT_AFTER'						=> 'Split 글타래 from selected post onwards',
	'SPLIT_FORUM'						=> 'Forum for new 글타래',
	'SPLIT_POSTS'						=> 'Split selected posts',
	'SPLIT_SUBJECT'						=> 'New 글타래 title',
	'SPLIT_TOPIC_ALL'					=> 'Split 글타래 from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Are you sure you want to split this 글타래?',
	'SPLIT_TOPIC_BEYOND'				=> 'Split 글타래 at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this 글타래 at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a 글타래 in two, either by selecting the posts individually or by splitting at a selected post.',

	'THIS_PM_IP'				=> 'IP for this private message',
	'THIS_POST_IP'				=> 'IP for this post',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected 글타래들 have been approved.',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected 글타래들 have been successfully removed from the database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'The selected 글타래들 have been disapproved.',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected 글타래들 have been copied successfully.',
	'TOPICS_LOCKED_SUCCESS'		=> 'The selected 글타래들 have been locked.',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected 글타래들 have been moved successfully.',
	'TOPICS_RESTORED_SUCCESS'	=> 'The selected 글타래들 have been restored successfully.',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected 글타래들 have been resynchronised.',
	'TOPICS_TYPE_CHANGED'		=> 'Topic types changed successfully.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'The selected 글타래들 have been unlocked.',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected 글타래 has been approved.',
	'TOPIC_DELETED_SUCCESS'		=> 'The selected 글타래 has been successfully removed from the database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected 글타래 has been disapproved.',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected 글타래 has been copied successfully.',
	'TOPIC_LOCKED_SUCCESS'		=> 'The selected 글타래 has been locked.',
	'TOPIC_MOVED_SUCCESS'		=> 'The selected 글타래 has been moved successfully.',
	'TOPIC_NOT_EXIST'			=> 'The 글타래 you selected does not exist.',
	'TOPIC_RESTORED_SUCCESS'	=> 'The selected 글타래 has been restored successfully.',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected 글타래 has been resynchronised.',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected 글타래 has been split successfully.',
	'TOPIC_TIME'				=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected 글타래 has been unlocked.',
	'TOTAL_WARNINGS'			=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'There are no posts waiting for approval.',
		1	=> 'In total there is <strong>1</strong> post waiting for approval.',
		2	=> 'In total there are <strong>%d</strong> posts waiting for approval.',
	),
	'UNLOCK'						=> 'Unlock',
	'UNLOCK_POST'					=> 'Unlock post',
	'UNLOCK_POST_EXPLAIN'			=> 'Allow editing',
	'UNLOCK_POST_POST'				=> 'Unlock post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Are you sure you want to allow editing this post?',
	'UNLOCK_POST_POSTS'				=> 'Unlock selected posts',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'Unlock 글타래',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Are you sure you want to unlock this 글타래?',
	'UNLOCK_TOPICS'					=> 'Unlock selected 글타래들',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Are you sure you want to unlock all selected 글타래들?',
	'USER_CANNOT_POST'				=> 'You cannot post in this forum.',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum.',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'User warned successfully.',

	'VIEW_DETAILS'			=> 'View details',
	'VIEW_PM'				=> 'View private message',
	'VIEW_POST'				=> '게시물 보기',

	'WARNED_USERS'			=> 'Warned users',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them.',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> '이렇게하면 만든 다음 포스트에 대한 경고입니다 : %s .',
	'NO_WARNINGS'	=> '어떤 경고도 존재하지않습니다',

	'YOU_SELECTED_TOPIC'	=> '당신의 글타래 숫자가 선택됨 %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> '와레즈',
			'SPAM'		=> '스팸',
			'OFF_TOPIC'	=> '오프-글타래',
			'OTHER'		=> '또 다름',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> '이 메시지는 불법 또는 불법 복제 소프트웨어에 대한 링크가 포함되어 있습니다.',
			'SPAM'		=> '보고 된 메시지는 웹 사이트 또는 다른 제품에 대한 광고를 할 수있는 유일한 목적이있습니다.',
			'OFF_TOPIC'	=> '보고 된 메시지는 글타래 꺼져 있습니다.',
			'OTHER'		=> '다른 범주에 맞지 않는보고 메시지는, 추가 정보 필드를 사용하십시오.',
		),
	),
));
