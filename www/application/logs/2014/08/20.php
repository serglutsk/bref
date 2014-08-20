<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-20 02:15:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\System\Desktop.php [ 20 ] in Z:\home\bref\www\application\classes\Controller\System\Desktop.php:20
2014-08-20 02:15:32 --- DEBUG: #0 Z:\home\bref\www\application\classes\Controller\System\Desktop.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\bref\ww...', 20, Array)
#1 Z:\home\bref\www\system\classes\Kohana\Controller.php(69): Controller_System_Desktop->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\bref\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_System_Desktop))
#4 Z:\home\bref\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\bref\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\bref\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\bref\www\application\classes\Controller\System\Desktop.php:20
2014-08-20 02:30:10 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\bref\www\system\classes\Kohana\Session.php:125
2014-08-20 02:30:10 --- DEBUG: #0 Z:\home\bref\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\bref\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\bref\www\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\bref\www\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\bref\www\application\classes\Controller\Security.php(43): Kohana_Auth::instance()
#5 Z:\home\bref\www\application\classes\Controller\Security.php(26): Controller_Security->set_rights()
#6 Z:\home\bref\www\application\classes\Controller\Ajax.php(23): Controller_Security->before()
#7 Z:\home\bref\www\modules\msg\classes\Controller\Ajax\Msg\Popup.php(7): Controller_Ajax->before()
#8 Z:\home\bref\www\system\classes\Kohana\Controller.php(69): Controller_Ajax_Msg_Popup->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\bref\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Msg_Popup))
#11 Z:\home\bref\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\bref\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\bref\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\bref\www\system\classes\Kohana\Session.php:125
2014-08-20 02:39:42 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in Z:\home\bref\www\system\classes\Kohana\Session.php:125
2014-08-20 02:39:42 --- DEBUG: #0 Z:\home\bref\www\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\bref\www\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\bref\www\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 Z:\home\bref\www\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\bref\www\application\classes\Controller\Security.php(43): Kohana_Auth::instance()
#5 Z:\home\bref\www\application\classes\Controller\Security.php(26): Controller_Security->set_rights()
#6 Z:\home\bref\www\application\classes\Controller\Ajax.php(23): Controller_Security->before()
#7 Z:\home\bref\www\modules\msg\classes\Controller\Ajax\Msg\Popup.php(7): Controller_Ajax->before()
#8 Z:\home\bref\www\system\classes\Kohana\Controller.php(69): Controller_Ajax_Msg_Popup->before()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\bref\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Msg_Popup))
#11 Z:\home\bref\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\bref\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\bref\www\index.php(119): Kohana_Request->execute()
#14 {main} in Z:\home\bref\www\system\classes\Kohana\Session.php:125
2014-08-20 02:51:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Support\Ticket.php [ 13 ] in Z:\home\bref\www\application\classes\Controller\Support\Ticket.php:13
2014-08-20 02:51:12 --- DEBUG: #0 Z:\home\bref\www\application\classes\Controller\Support\Ticket.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\bref\ww...', 13, Array)
#1 Z:\home\bref\www\system\classes\Kohana\Controller.php(69): Controller_Support_Ticket->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\bref\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Support_Ticket))
#4 Z:\home\bref\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\bref\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\bref\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\bref\www\application\classes\Controller\Support\Ticket.php:13
2014-08-20 02:51:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Support\Ticket.php [ 13 ] in Z:\home\bref\www\application\classes\Controller\Support\Ticket.php:13
2014-08-20 02:51:15 --- DEBUG: #0 Z:\home\bref\www\application\classes\Controller\Support\Ticket.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\bref\ww...', 13, Array)
#1 Z:\home\bref\www\system\classes\Kohana\Controller.php(69): Controller_Support_Ticket->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\bref\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Support_Ticket))
#4 Z:\home\bref\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\bref\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\bref\www\index.php(119): Kohana_Request->execute()
#7 {main} in Z:\home\bref\www\application\classes\Controller\Support\Ticket.php:13