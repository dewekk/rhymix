<?php
$lang->cmd_advanced_mailer = '메일, SMS 및 푸시 알림 관리 모듈';
$lang->cmd_advanced_mailer_general_config = '기본 설정';
$lang->cmd_advanced_mailer_is_enabled = '모듈 사용';
$lang->cmd_advanced_mailer_is_enabled_yes = '사용';
$lang->cmd_advanced_mailer_is_enabled_no = '사용하지 않음';
$lang->cmd_advanced_mailer_logging = '발송 내역 기록';
$lang->cmd_advanced_mailer_log_mail = '메일 발송 내역';
$lang->cmd_advanced_mailer_log_mail_errors = '메일 에러 내역';
$lang->cmd_advanced_mailer_log_sms = 'SMS 발송 내역';
$lang->cmd_advanced_mailer_log_sms_errors = 'SMS 에러 내역';
$lang->cmd_advanced_mailer_log_push = '푸시 알림 발송 내역';
$lang->cmd_advanced_mailer_log_push_errors = '푸시 알림 에러 내역';
$lang->cmd_advanced_mailer_log_yes = '기록';
$lang->cmd_advanced_mailer_log_no = '기록하지 않음';
$lang->cmd_advanced_mailer_sending_method_config = '기본 발송 방법 설정';
$lang->cmd_advanced_mailer_about_sending_method_config = '반드시 모든 항목을 입력하시기 바랍니다.';
$lang->cmd_advanced_mailer_sending_method = '발송 방법';
$lang->cmd_advanced_mailer_about_sending_method = '기본 발송 방법은 <a href="' . \RX_BASEURL . 'index.php?module=admin&act=dispAdminConfigNotification" target="_blank">알림 설정</a> 화면에서 변경할 수 있습니다.';
$lang->cmd_advanced_mailer_sending_method_default = '기본 발송 방법';
$lang->cmd_advanced_mailer_sending_method_exceptions = '예외 발송 방법';
$lang->cmd_advanced_mailer_smtp_manual_entry = '직접 입력';
$lang->cmd_advanced_mailer_smtp_host = 'SMTP 서버';
$lang->cmd_advanced_mailer_smtp_port = 'SMTP 포트';
$lang->cmd_advanced_mailer_smtp_security = 'SMTP 보안';
$lang->cmd_advanced_mailer_smtp_security_ssl = 'SSL';
$lang->cmd_advanced_mailer_smtp_security_tls = 'TLS (STARTTLS)';
$lang->cmd_advanced_mailer_smtp_security_none = '사용하지 않음';
$lang->cmd_advanced_mailer_smtp_user = '아이디';
$lang->cmd_advanced_mailer_smtp_pass = '비밀번호';
$lang->cmd_advanced_mailer_api_url = 'API URL';
$lang->cmd_advanced_mailer_api_key = 'API 키';
$lang->cmd_advanced_mailer_api_secret = 'API 비밀';
$lang->cmd_advanced_mailer_api_domain = '도메인';
$lang->cmd_advanced_mailer_api_token = 'API 토큰';
$lang->cmd_advanced_mailer_api_type = 'API 구분';
$lang->cmd_advanced_mailer_api_type_free = '무료';
$lang->cmd_advanced_mailer_api_type_paid = '유료';
$lang->cmd_advanced_mailer_api_user = '아이디';
$lang->cmd_advanced_mailer_api_pass = '비밀번호';
$lang->cmd_advanced_mailer_fcm_api_key = 'FCM Legacy API 키';
$lang->cmd_advanced_mailer_fcm_service_account = 'FCM 서비스 계정 파일';
$lang->cmd_advanced_mailer_apns_certificate = 'APNs 인증서 파일';
$lang->cmd_advanced_mailer_apns_passphrase = 'APNs 인증서 암호';
$lang->cmd_advanced_mailer_allow_guest_device = '비회원 기기 등록';
$lang->cmd_advanced_mailer_about_allow_guest_device = '로그인하지 않은 사용자도 기기를 등록할 수 있도록 허용합니다.';
$lang->cmd_advanced_mailer_sender_key = '센더 키';
$lang->cmd_advanced_mailer_sender_identity = '보낸이 설정';
$lang->cmd_advanced_mailer_about_sender_identity = '보낸이의 이름과 메일 주소는 <a href="' . \RX_BASEURL . 'index.php?module=admin&act=dispAdminConfigNotification" target="_blank">알림 설정</a> 화면에서 변경할 수 있습니다.';
$lang->cmd_advanced_mailer_sender_name = '보낸이 이름';
$lang->cmd_advanced_mailer_sender_email = '보낸이 메일 주소';
$lang->cmd_advanced_mailer_reply_to = 'Reply-To 주소';
$lang->cmd_advanced_mailer_force_sender = '이 주소 외 사용 금지';
$lang->cmd_advanced_mailer_about_force_sender = '위에서 설정한 주소 외의 보낸이 주소를 사용할 경우 위에서 설정한 주소로 강제 변경합니다.';
$lang->cmd_advanced_mailer_about_force_sender_caution_line_1 = '포털 서비스의 SMTP를 사용할 경우 보낸이 메일 주소가 SMTP 로그인 정보와 반드시 일치해야 합니다.';
$lang->cmd_advanced_mailer_about_force_sender_caution_line_2 = '보낸이 주소를 강제 변경하더라도 원래 주소를 Reply-To로 지정하여 답장을 보내는 데는 지장이 없도록 합니다.';
$lang->cmd_advanced_mailer_spf_dkim_setting = 'SPF/DKIM 설정 안내';
$lang->cmd_advanced_mailer_about_spf_dkim_setting = '자신의 도메인에서 메일을 보내는 경우에만 해당됩니다. 일부 API는 지원하지 않거나 별도의 매뉴얼을 참고하셔야 합니다.';
$lang->cmd_advanced_mailer_not_applicable_because_sender_domain = '보내는 주소가 자신의 도메인이 아니므로 해당되지 않습니다.';
$lang->cmd_advanced_mailer_not_applicable_because_sending_method = '선택하신 발송 방법에는 해당되지 않습니다.';
$lang->cmd_advanced_mailer_domain_count = '도메인 %d개';
$lang->cmd_advanced_mailer_dns_hostname = 'DNS 호스트명';
$lang->cmd_advanced_mailer_txt_record = 'TXT 레코드 값';
$lang->cmd_advanced_mailer_check = '체크';
$lang->cmd_advanced_mailer_nothing_to_check = '체크할 것이 없습니다.';
$lang->cmd_advanced_mailer_check_failure = '체크에 실패했습니다.';
$lang->cmd_advanced_mailer_check_no_records = '호스트에는 TXT 레코드가 없습니다.';
$lang->cmd_advanced_mailer_check_result = '호스트의 TXT 레코드는 다음과 같습니다.';
$lang->cmd_advanced_mailer_other_info = '참고';
$lang->cmd_advanced_mailer_other_info_mail_spf = 'mail() 함수를 사용하려면 반드시 인터넷진흥원에 <a href="https://www.kisarbl.or.kr/" target="_blank">화이트 도메인</a> 등록을 하시기 바랍니다.';
$lang->cmd_advanced_mailer_other_info_ses_dkim = 'Amazon SES에서 DKIM을 사용하려면 관리 콘솔의 안내에 따라 3개의 CNAME 레코드를 생성해야 합니다.';
$lang->cmd_advanced_mailer_other_info_mailgun_dkim = 'DKIM 호스트명은 달라질 수 있습니다.';
$lang->cmd_advanced_mailer_other_info_postmark_dkim = '정확한 DKIM 호스트명은 Postmark 계정의 Sender Signatures 페이지를 참고하시기 바랍니다.';
$lang->cmd_advanced_mailer_other_info_woorimail_dkim = 'DKIM 설정은 우리메일에 로그인하여 확인하십시오.';
$lang->cmd_advanced_mailer_ellipsis = '(중략)';
$lang->cmd_advanced_mailer_mail_test = '메일 테스트';
$lang->cmd_advanced_mailer_recipient_name = '받는이 이름';
$lang->cmd_advanced_mailer_recipient_email = '받는이 메일 주소';
$lang->cmd_advanced_mailer_recipient_user_id = '받는이 아이디';
$lang->cmd_advanced_mailer_send = '발송';
$lang->cmd_advanced_mailer_test_result = '테스트 결과';
$lang->cmd_advanced_mailer_exception_domains = '예외 도메인';
$lang->cmd_advanced_mailer_exception_disabled = '기본 발송 방법 사용';
$lang->cmd_advanced_mailer_exception_domains_list = '해당 도메인 목록';
$lang->cmd_advanced_mailer_about_exception_domains_list = '쉼표 또는 줄바꿈으로 구분하여 주십시오. (예: daum.net, hanmail.net)';
$lang->cmd_advanced_mailer_about_exception_domains = '목록에 나열된 도메인으로 메일을 보낼 때는 기본 발송 방법 대신 별도로 지정된 발송 방법을 사용합니다.';
$lang->cmd_advanced_mailer_exception_group = '예외 그룹';
$lang->cmd_advanced_mailer_use_exceptions = '예외 도메인 설정';
$lang->cmd_advanced_mailer_use_exceptions_yes = '예외 설정을 적용하여 테스트';
$lang->cmd_advanced_mailer_use_exceptions_no = '무시하고 기본 발송 방법만 테스트';
$lang->msg_advanced_mailer_about_dummy = '메일을 발송하지 않고 로그 기록만 하도록 강제합니다. 테스트 중 원치 않는 메일이 발송되는 것을 막기 위해 사용할 수 있습니다.';
$lang->msg_advanced_mailer_about_dummy_exceptions = '이 옵션을 선택하더라도 예외 도메인을 지정한 경우 메일이 발송될 수 있으니 주의하십시오.';
$lang->msg_advanced_mailer_about_mailfunction = 'PHP에 내장된 mail() 함수를 사용합니다. 발송 성공률이 매우 낮습니다.<br/><span style="color:red">이 옵션은 추후 지원되지 않을 수 있으니, 가능하면 다른 방식을 선택하시기 바랍니다.</span>';
$lang->msg_advanced_mailer_sending_method_is_invalid = '올바른 발송 방법을 선택해 주십시오.';
$lang->msg_advanced_mailer_sending_method_is_not_configured = '선택한 발송 방법(%s)이 완전히 설정되지 않았습니다. 기본 설정 페이지로 돌아가서 설정을 마쳐 주십시오.';
$lang->msg_advanced_mailer_smtp_host_is_invalid = '올바른 SMTP 서버 이름을 입력해 주십시오.';
$lang->msg_advanced_mailer_smtp_port_is_invalid = '올바른 SMTP 포트 번호를 입력해 주십시오.';
$lang->msg_advanced_mailer_smtp_security_is_invalid = '올바른 SMTP 보안 방식을 선택해 주십시오.';
$lang->msg_advanced_mailer_username_is_empty = '선택한 발송 방법에 필요한 아이디를 입력해 주십시오.';
$lang->msg_advanced_mailer_password_is_empty = '선택한 발송 방법에 필요한 비밀번호를 입력해 주십시오.';
$lang->msg_advanced_mailer_aws_region_is_invalid = '올바른 AWS Region을 선택해 주십시오.';
$lang->msg_advanced_mailer_aws_access_key_is_empty = 'AWS Access Key를 입력해 주십시오.';
$lang->msg_advanced_mailer_aws_secret_key_is_empty = 'AWS Secret Key를 입력해 주십시오.';
$lang->msg_advanced_mailer_domain_is_empty = '올바른 도메인을 입력해 주십시오.';
$lang->msg_advanced_mailer_api_key_is_empty = '올바른 API Key를 입력해 주십시오.';
$lang->msg_advanced_mailer_sender_name_is_empty = '보낸이 이름을 입력해 주십시오.';
$lang->msg_advanced_mailer_sender_email_is_empty = '보낸이 메일 주소를 입력해 주십시오.';
$lang->msg_advanced_mailer_sender_email_is_invalid = '보낸이 메일 주소가 올바른 메일 주소가 아닙니다.';
$lang->msg_advanced_mailer_reply_to_is_invalid = 'Reply-To 메일 주소가 올바른 메일 주소가 아닙니다.';
$lang->msg_advanced_mailer_recipient_name_is_empty = '받는이 이름을 입력해 주십시오.';
$lang->msg_advanced_mailer_recipient_email_is_empty = '받는이 메일 주소를 입력해 주십시오.';
$lang->msg_advanced_mailer_recipient_email_is_invalid = '받는이 메일 주소가 올바른 메일 주소가 아닙니다.';
$lang->msg_advanced_mailer_test_success = '테스트에 성공하였습니다. 메일을 확인해 보시기 바랍니다.';
$lang->cmd_advanced_mailer_test_push_subject = '테스트 알림';
$lang->cmd_advanced_mailer_test_push_content = '테스트 알림 내용입니다.';
$lang->msg_advanced_mailer_google_account_security = '아이디 또는 비밀번호가 틀렸거나, 구글 보안 설정 때문에 SMTP 접속이 차단되었습니다.<br />자세한 정보는 <a href="https://support.google.com/mail/answer/14257?hl=ko" target="_blank">여기</a>를 참고하시기 바랍니다.';
$lang->msg_advanced_mailer_naver_smtp_disabled = '아이디 또는 비밀번호가 틀렸거나, 네이버 계정 환경설정에서 POP3/SMTP를 사용하지 않도록 설정되어 있습니다.';
$lang->msg_advanced_mailer_sms_config_invalid = 'SMS API 설정에 잘못되었거나 누락된 부분이 있습니다. 확인해 주십시오.';
$lang->msg_advanced_mailer_push_config_invalid = '푸시 알림 설정에 잘못되었거나 누락된 부분이 있습니다. 확인해 주십시오.';
$lang->msg_advanced_mailer_unknown_error = '알 수 없는 오류가 발생하였습니다.';
$lang->msg_advanced_mailer_log_is_empty = '표시할 항목이 없습니다.';
$lang->cmd_advanced_mailer_status_sender = '보낸이';
$lang->cmd_advanced_mailer_status_recipient = '받는이';
$lang->cmd_advanced_mailer_status_subject = '제목';
$lang->cmd_advanced_mailer_status_content = '내용';
$lang->cmd_advanced_mailer_status_url = 'URL';
$lang->cmd_advanced_mailer_status_sending_method = '발송 방법';
$lang->cmd_advanced_mailer_status_time = '발송 시간';
$lang->cmd_advanced_mailer_status = '상태';
$lang->cmd_advanced_mailer_status_success = '성공';
$lang->cmd_advanced_mailer_status_error = '에러';
$lang->cmd_advanced_mailer_status_error_msg = '에러 메시지';
$lang->cmd_advanced_mailer_status_calling_script = '호출 위치';
$lang->cmd_advanced_mailer_clear_log_condition_all = '모두';
$lang->cmd_advanced_mailer_clear_log_condition = '%d일 이상';
$lang->cmd_advanced_mailer_clear_log_button = '오래된 기록 삭제';
$lang->cmd_advanced_mailer_sms_test = 'SMS 테스트';
$lang->cmd_advanced_mailer_recipient_number = '받는이 전화번호';
$lang->cmd_advanced_mailer_country_code = '국가코드';
$lang->cmd_advanced_mailer_country_code_help = '국내 번호로 발송하실 경우 국가코드는 비워 두시기 바랍니다.';
$lang->cmd_advanced_mailer_test_content = '라이믹스 SMS 발송 테스트입니다.';
$lang->msg_advanced_mailer_recipient_number_is_empty = '받는이 전화번호를 입력해 주십시오.';
$lang->msg_advanced_mailer_recipient_user_id_not_found = '입력하신 아이디와 일치하는 회원을 찾을 수 없습니다.';
$lang->msg_advanced_mailer_recipient_has_no_devices = '입력하신 아이디로 등록된 모바일 기기가 없습니다.';
$lang->msg_advanced_mailer_subject_is_empty = '제목을 입력해 주십시오.';
$lang->msg_advanced_mailer_content_is_empty = '내용을 입력해 주십시오.';
$lang->msg_advanced_mailer_url_is_invalid = '사이트 내부의 URL을 입력해 주십시오.';
$lang->msg_advanced_mailer_test_success_sms = '테스트에 성공하였습니다. SMS를 확인해 보시기 바랍니다.';
$lang->cmd_advanced_mailer_push_test = '푸시 알림 테스트';
$lang->cmd_advanced_mailer_success_count = '성공';
$lang->cmd_advanced_mailer_deleted_count = '삭제';
$lang->cmd_advanced_mailer_updated_count = '변경';
$lang->cmd_advanced_mailer_not_rhymix = '이 모듈은 XE용으로, 라이믹스와는 호환되지 않습니다. 라이믹스에 기본 포함된 버전을 사용하시기 바랍니다.';
$lang->msg_advanced_mailer_about_fcm_legacy = 'Legacy API는 2024년 6월 이후 사용할 수 없으니 HTTP v1 API로 변경하십시오.';
$lang->msg_advanced_mailer_about_fcm_service_account = 'Firebase 콘솔의 &quot;서비스 계정&quot; 메뉴에서 비공개 키를 생성한 후,<br>다운로드한 JSON 파일의 내용을 빈 칸에 붙여넣으십시오.';
