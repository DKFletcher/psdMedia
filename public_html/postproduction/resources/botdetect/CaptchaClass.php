<?php
 class Captcha { public function __construct($_1vz7zasi17p3c98lbz4tv) { $this->_Ol7o9tu23ezj1k4o = $_1vz7zasi17p3c98lbz4tv; $this->_Ifpec6wxzoan3yjqndbvc = "\x4c\x42\x44\x5f\x56\x43\111\104\137{$_1vz7zasi17p3c98lbz4tv}"; $this->_I2il9dsj0s74l6hkrvbet = "{$_1vz7zasi17p3c98lbz4tv}\x5f\x43\141\160\164\x63\x68\x61\111\155\141\x67\x65"; $this->_lzpth4hdiobcbqxsjugiw = new LBD_CaptchaBase($_1vz7zasi17p3c98lbz4tv); $this->_Imc85ecf3aw50ms0we4q9khjhp = $this->_lzpth4hdiobcbqxsjugiw->CaptchaId; $this->_l733an859wsvpkroc6vbx = CaptchaConfiguration::GetSettings(); $this->_ieecxhnyopr1hifk1frcf76zr2 = $this->_l733an859wsvpkroc6vbx->ImageTooltip; $this->_16tjjzg3vrj9g6bg = $this->_l733an859wsvpkroc6vbx->SoundEnabled; $this->_i4b2z3s6tcutjl8v59qkknsbgb = $this->_l733an859wsvpkroc6vbx->SoundTooltip; $this->_Iy3xqz8rbb0ymyt7yzb8b = $this->_l733an859wsvpkroc6vbx->SoundIconUrl; $this->_Ikkgtffa01shhhbwxmqau = $this->_l733an859wsvpkroc6vbx->ReloadEnabled; $this->_149dg093buahqprv = $this->_l733an859wsvpkroc6vbx->ReloadTooltip; $this->_11k0ug73nrwxamg0504zy = $this->_l733an859wsvpkroc6vbx->ReloadIconUrl; $this->_O9huzvqrfhr64ni0 = $this->_l733an859wsvpkroc6vbx->HelpLinkEnabled; $this->_ihgdrh3eo9yqu4df9qk2i3z0yj = $this->_l733an859wsvpkroc6vbx->HelpLinkMode; $this->_Ijtytxnlohkwazwisxoax = $this->_l733an859wsvpkroc6vbx->HelpLinkUrl; $this->_Oyeowkwt50s3lkc9n3exp = $this->_l733an859wsvpkroc6vbx->HelpLinkText; $this->_0vq4s1itqp5tomef = $this->_l733an859wsvpkroc6vbx->RemoteScriptEnabled; $this->Load(); } private $_l733an859wsvpkroc6vbx = null; private $_lzpth4hdiobcbqxsjugiw; public function get_CaptchaBase() { return $this->_lzpth4hdiobcbqxsjugiw; } private $_Ol7o9tu23ezj1k4o; private $_Imc85ecf3aw50ms0we4q9khjhp; private $_0favyaytwiphy1ul; public function get_UserInputId() { return $this->_0favyaytwiphy1ul; } public function set_UserInputId($_0871ek2relce5ojarimrklwyjt) { $this->_0favyaytwiphy1ul = "$_0871ek2relce5ojarimrklwyjt"; } private $_Ifpec6wxzoan3yjqndbvc; protected function get_HiddenFieldId() { return $this->_Ifpec6wxzoan3yjqndbvc; } private $_Ih7dnqw2d14eg3u9e4rau = -255; private $_0i0m3gvq3ybvqkmeya9c72nj16 = -255; public function get_TabIndex() { return $this->_Ih7dnqw2d14eg3u9e4rau; } public function set_TabIndex($_0k19kn7qjlz60ph2x6awj8mz2y) { $this->_Ih7dnqw2d14eg3u9e4rau = (int)($_0k19kn7qjlz60ph2x6awj8mz2y); } public function get_IsTabIndexSet() { $_l7qmj86172cbpee3u6dy2o9agv = false; if (-255 != $this->_Ih7dnqw2d14eg3u9e4rau) { $_l7qmj86172cbpee3u6dy2o9agv = true; } return $_l7qmj86172cbpee3u6dy2o9agv; } private $_ieecxhnyopr1hifk1frcf76zr2; public function get_ImageTooltip() { return $this->_ieecxhnyopr1hifk1frcf76zr2; } public function set_ImageTooltip($_o1g1179g8zxkuuom) { $this->_ieecxhnyopr1hifk1frcf76zr2 = (string)$_o1g1179g8zxkuuom; } private $_16tjjzg3vrj9g6bg; public function get_SoundEnabled() { return $this->_16tjjzg3vrj9g6bg; } public function set_SoundEnabled($_o2j1xrj9ojal4ol5ii7rf) { $this->_16tjjzg3vrj9g6bg = (bool)$_o2j1xrj9ojal4ol5ii7rf; } private $_i4b2z3s6tcutjl8v59qkknsbgb; public function get_SoundTooltip() { return $this->_i4b2z3s6tcutjl8v59qkknsbgb; } public function set_SoundTooltip($_lv6rftzehn17itzso92mc) { $this->_i4b2z3s6tcutjl8v59qkknsbgb = (string)$_lv6rftzehn17itzso92mc; } private $_Iy3xqz8rbb0ymyt7yzb8b; public function get_SoundIconUrl() { return $this->_Iy3xqz8rbb0ymyt7yzb8b; } public function set_SoundIconUrl($_Okt80frsbr8k5gfcxooif) { $this->_Iy3xqz8rbb0ymyt7yzb8b = (string)$_Okt80frsbr8k5gfcxooif; } private $_Ikkgtffa01shhhbwxmqau; public function get_ReloadEnabled() { return $this->_Ikkgtffa01shhhbwxmqau; } public function set_ReloadEnabled($_ipaajmw9ihnfe9ce3kvds) { $this->_Ikkgtffa01shhhbwxmqau = (bool)$_ipaajmw9ihnfe9ce3kvds; } private $_149dg093buahqprv; public function get_ReloadTooltip() { return $this->_149dg093buahqprv; } public function set_ReloadTooltip($_lnk9py27qdbmmhsamljxvqgxzy) { $this->_149dg093buahqprv = (string) $_lnk9py27qdbmmhsamljxvqgxzy; } private $_11k0ug73nrwxamg0504zy; public function get_ReloadIconUrl() { return $this->_11k0ug73nrwxamg0504zy; } public function set_ReloadIconUrl($_I205plt5j3jrrrz6ev28d) { $this->_11k0ug73nrwxamg0504zy = (string) $_I205plt5j3jrrrz6ev28d; } private $_O9huzvqrfhr64ni0; public function get_HelpLinkEnabled() { return $this->_O9huzvqrfhr64ni0; } private $_ihgdrh3eo9yqu4df9qk2i3z0yj; public function get_HelpLinkMode() { return $this->_ihgdrh3eo9yqu4df9qk2i3z0yj; } private $_Ijtytxnlohkwazwisxoax; public function get_HelpLinkUrl() { return $this->_Ijtytxnlohkwazwisxoax; } private $_Oyeowkwt50s3lkc9n3exp; public function get_HelpLinkText() { return $this->_Oyeowkwt50s3lkc9n3exp; } private $_0vq4s1itqp5tomef; public function get_RemoteScriptEnabled() { return $this->_0vq4s1itqp5tomef; } public function get_IsSolved() { return LBD_Persistence_Load("\x4c\x42\x44\x5f\111\163\123\x6f\x6c\166\x65\x64\x5f" . $this->_Imc85ecf3aw50ms0we4q9khjhp); } public function Reset() { LBD_Persistence_Clear("\x4c\102\104\x5f\x49\x73\x53\x6f\154\x76\x65\x64\x5f" . $this->_Imc85ecf3aw50ms0we4q9khjhp); } private function ag1wq() { $this->_O9huzvqrfhr64ni0 = LBD_HelpLinkHelper::GetHelpLinkEnabled($this->_O9huzvqrfhr64ni0); $this->_Ijtytxnlohkwazwisxoax = LBD_HelpLinkHelper::GetHelpLinkUrl($this->_Ijtytxnlohkwazwisxoax, $this->Localization); $this->_Oyeowkwt50s3lkc9n3exp = LBD_HelpLinkHelper::GetHelpLinktext($this->_Oyeowkwt50s3lkc9n3exp, $this->ImageWidth); } private $_1ewnfek9hnmcmdgt = LBD_Status::Unknown; public function get_UseSmallIcons() { $_is4g7ch7dnlihrom = false; switch ($this->_1ewnfek9hnmcmdgt) { case LBD_Status::True: $_is4g7ch7dnlihrom = true; break; case LBD_Status::False: $_is4g7ch7dnlihrom = false; break; case LBD_Status::Unknown: $_is4g7ch7dnlihrom = ($this->ImageHeight < 50); break; } return $_is4g7ch7dnlihrom; } public function set_UseSmallIcons($_Ia5lrp6ogceb6758wvostr1d75) { if ($_Ia5lrp6ogceb6758wvostr1d75) { $this->_1ewnfek9hnmcmdgt = LBD_Status::True; } else { $this->_1ewnfek9hnmcmdgt = LBD_Status::False; } } private $_O3vvka93uowqxhpb8goj8 = LBD_Status::Unknown; public function get_UseHorizontalIcons() { $_Ixe2a4l588u22jokj46bq = false; switch ($this->_O3vvka93uowqxhpb8goj8) { case LBD_Status::True: $_Ixe2a4l588u22jokj46bq = true; break; case LBD_Status::False: $_Ixe2a4l588u22jokj46bq = false; break; case LBD_Status::Unknown: $_Ixe2a4l588u22jokj46bq = ($this->ImageHeight < 40); break; } return $_Ixe2a4l588u22jokj46bq; } public function set_UseHorizontalIcons($_oz68u9x11ceyotgci732f) { if ($_oz68u9x11ceyotgci732f) { $this->_O3vvka93uowqxhpb8goj8 = LBD_Status::True; } else { $this->_O3vvka93uowqxhpb8goj8 = LBD_Status::False; } } const IconSize = 22; const SmallIconSize = 17; const IconSpacing = 2; public function get_TotalWidth() { return $this->ImageWidth + 6 + $this->get_IconsDivWidth(); } public function get_TotalHeight() { return $this->ImageHeight; } public function get_IconWidth() { if ($this->n0bgs()) { if ($this->UseSmallIcons) { return 17; } else { return 22; } } else { return 22; } } public function get_IconSpaing() { return 2; } public function get_IconsDivWidth() { if ($this->UseHorizontalIcons) { return 2 * $this->get_IconWidth() + 4 * $this->get_IconSpaing(); } else { return $this->get_IconWidth() + $this->get_IconSpaing(); } } private function n0bgs() { return (0 == strcmp(basename($this->_l733an859wsvpkroc6vbx->SoundIconUrl), "\154\x62\x64\x5f\x73\x6f\x75\156\x64\x5f\151\x63\157\156\56\147\151\146")) && 0 == strcmp(basename($this->_l733an859wsvpkroc6vbx->ReloadIconUrl), "\x6c\142\x64\137\x72\145\154\x6f\x61\144\137\151\x63\x6f\156\x2e\147\x69\146"); } private function bf5dl() { if ($this->UseSmallIcons) { $this->_11k0ug73nrwxamg0504zy = CaptchaUrls::SmallReloadIconUrl(); $this->_Iy3xqz8rbb0ymyt7yzb8b = CaptchaUrls::SmallSoundIconUrl(); } if (!$this->CaptchaSoundAvailable) { if ($this->UseSmallIcons) { $this->_Iy3xqz8rbb0ymyt7yzb8b = CaptchaUrls::DisabledSmallSoundIconUrl(); } else { $this->_Iy3xqz8rbb0ymyt7yzb8b = CaptchaUrls::DisabledSoundIconUrl(); } $this->_i4b2z3s6tcutjl8v59qkknsbgb = "\x3c\x65\x6d\x3e\x43\x61\160\x74\143\x68\x61\x20\163\x6f\165\x6e\144\40\151\x73\x20\x65\156\141\x62\154\145\144\54\x20\142\165\x74\40\164\150\x65\x20\x70\162\x6f\156\165\156\x63\x69\x61\x74\x69\x6f\156\x20\163\157\x75\156\144\x20\x70\x61\143\153\x61\x67\145\40\x72\145\x71\x75\151\162\x65\x64\x20\146\x6f\162\40\x74\150\145\40\143\165\x72\x72\x65\x6e\164\x20\x6c\x6f\x63\x61\154\145\x20\143\x61\156\40\x6e\x6f\x74\x20\x62\x65\40\146\x6f\165\156\x64\x2e\x3c\x2f\x65\155\76\40\n\x3c\x65\x6d\76\124\x6f\40\x65\156\x61\x62\154\x65\x20\x43\141\x70\x74\143\x68\141\40\x73\x6f\165\x6e\x64\40\146\x6f\162\x20\164\x68\x69\x73\40\154\157\x63\141\x6c\145\x2c\40\x70\154\145\141\x73\x65\40\144\145\x70\x6c\x6f\171\x20\x74\x68\145\40\x61\160\x70\x72\x6f\x70\x72\151\141\164\145\40\163\157\x75\x6e\x64\40\x70\x61\143\x6b\x61\147\145\x20\146\162\x6f\155\40\x74\x68\x65\40\74\143\157\x64\145\76\x68\x74\164\160\72\57\57\143\141\160\x74\x63\150\x61\56\143\x6f\x6d\57\x63\141\x70\x74\143\150\x61\x2d\154\x6f\x63\x61\x6c\x69\x7a\141\x74\151\x6f\156\x73\56\150\x74\155\154\x3c\x2f\143\x6f\x64\145\x3e\x20\x70\141\147\x65\x20\x74\x6f\x20\x74\150\145\40\74\x63\157\144\145\76\x6c\x69\142\57\x62\x6f\x74\144\x65\x74\145\143\x74\57\x52\145\163\x6f\165\162\143\145\163\57\x53\x6f\x75\x6e\x64\x2f\x3c\x2f\x63\157\144\145\x3e\40\x66\157\154\144\145\162\40\x69\156\40\x74\x68\145\x20\x42\157\x74\x44\x65\164\145\143\164\x20\103\141\160\164\x63\x68\141\x20\154\x69\x62\x72\x61\x72\x79\x20\x79\x6f\165\40\x61\162\x65\40\x69\x6e\x63\154\x75\144\x69\x6e\x67\40\x69\x6e\x20\171\x6f\x75\162\x20\160\x61\x67\145\x2e\40\x46\x6f\162\x20\x65\x78\x61\x6d\160\154\x65\x2c\40\x75\x73\x65\40\74\x63\157\x64\145\76\x50\x72\x6f\156\x75\x6e\x63\x69\x61\x74\151\157\x6e\x5f\105\x6e\147\154\151\163\x68\137\x47\102\56\x62\144\163\160\74\57\143\157\144\x65\76\40\x66\157\162\40\102\x72\x69\164\151\x73\150\x20\x45\x6e\147\x6c\x69\x73\x68\40\103\141\160\164\143\x68\x61\x20\x73\x6f\x75\x6e\x64\163\56\x3c\x2f\x65\x6d\76\x20\n\74\145\155\76\124\x6f\40\x64\151\163\x61\x62\154\145\40\164\x68\x69\163\x20\x77\141\x72\x6e\x69\x6e\147\x20\141\156\x64\40\x72\x65\x6d\x6f\x76\x65\x20\x74\150\x65\40\163\157\x75\156\x64\x20\x69\x63\x6f\156\40\146\x6f\162\x20\x74\150\145\40\x63\165\x72\x72\x65\156\164\40\x43\141\160\164\143\x68\141\x20\x6c\157\143\141\x6c\x65\54\40\163\x65\164\40\x3c\143\x6f\144\145\76\$\103\141\x70\x74\x63\150\x61\103\157\156\146\151\x67\x2d\76\127\141\x72\156\x41\142\x6f\x75\164\x4d\151\x73\x73\x69\x6e\x67\123\x6f\165\x6e\x64\x50\141\x63\x6b\141\x67\x65\163\74\x2f\143\157\144\145\x3e\x20\x74\x6f\40\74\143\x6f\144\145\76\146\141\x6c\x73\145\74\x2f\x63\157\x64\145\76\x20\x69\x6e\40\x74\150\x65\40\74\143\x6f\144\x65\76\x6c\151\x62\57\x62\x6f\164\144\145\x74\x65\143\x74\57\x43\x61\160\x74\143\x68\x61\103\157\x6e\x66\151\147\x2e\x70\x68\x70\74\57\x63\x6f\144\x65\x3e\40\x66\151\154\x65\x2e\40\x54\157\40\x72\x65\155\x6f\x76\x65\40\x74\150\145\40\163\x6f\165\x6e\144\x20\x69\143\157\x6e\x20\146\x6f\x72\40\141\154\x6c\40\154\x6f\x63\141\x6c\145\x73\x2c\40\x73\x69\x6d\160\154\x79\x20\x73\x65\164\x20\x3c\143\x6f\x64\145\x3e\$\103\141\160\x74\x63\150\141\103\x6f\x6e\x66\x69\x67\x2d\x3e\x53\157\165\156\144\x45\156\x61\142\x6c\145\x64\40\x3d\x20\146\141\154\163\x65\73\74\57\x63\157\144\x65\76\56\x3c\x2f\145\x6d\76"; } } public function get_CaptchaImageUrl() { return CaptchaUrls::ImageUrl($this); } public function get_CaptchaSoundUrl() { return CaptchaUrls::SoundUrl($this); } public function get_ScriptIncludeUrl() { return CaptchaUrls::ScriptIncludeUrl(); } private $_I2il9dsj0s74l6hkrvbet; public function get_ImageClientId() { return $this->_I2il9dsj0s74l6hkrvbet; } public function get_RenderIcons() { return ($this->_16tjjzg3vrj9g6bg || $this->_Ikkgtffa01shhhbwxmqau); } protected function Load() { $this->_lzpth4hdiobcbqxsjugiw->Load(); } protected function Save() { $this->_lzpth4hdiobcbqxsjugiw->Save(); } public function Validate($_oalwdxdkmwr5xag51j77n = null, $_0pje3fb9ja146zz4cneoyav4ug = null) { if (!isset($_oalwdxdkmwr5xag51j77n) && array_key_exists($this->_0favyaytwiphy1ul, $_REQUEST)) { $_oalwdxdkmwr5xag51j77n = $_REQUEST[$this->_0favyaytwiphy1ul]; $_oalwdxdkmwr5xag51j77n = trim($_oalwdxdkmwr5xag51j77n); } if (!isset($_0pje3fb9ja146zz4cneoyav4ug) && array_key_exists($this->_Ifpec6wxzoan3yjqndbvc, $_REQUEST)) { $_0pje3fb9ja146zz4cneoyav4ug = $_REQUEST[$this->_Ifpec6wxzoan3yjqndbvc]; } $_Ogbkxjqep3fnjps1btl99 = false; if (isset($_oalwdxdkmwr5xag51j77n) && isset($_0pje3fb9ja146zz4cneoyav4ug)) { $_Ogbkxjqep3fnjps1btl99 = $this->_lzpth4hdiobcbqxsjugiw->Validate($_oalwdxdkmwr5xag51j77n, $_0pje3fb9ja146zz4cneoyav4ug, LBD_ValidationAttemptOrigin::Server); } if ($_Ogbkxjqep3fnjps1btl99) { LBD_Persistence_Save("\x4c\x42\x44\x5f\111\x73\x53\x6f\154\166\145\x64\x5f" . $this->_Imc85ecf3aw50ms0we4q9khjhp, true); } else { LBD_Persistence_Clear("\114\x42\104\137\111\x73\123\x6f\154\x76\145\144\x5f" . $this->_Imc85ecf3aw50ms0we4q9khjhp); } return $_Ogbkxjqep3fnjps1btl99; } public function AjaxValidate($_if2kvdzioqcrw03zzn801 = null, $_oour7h9xr1mi1lts = null) { $_1lvi65d9egasqdq1 = false; if (isset($_if2kvdzioqcrw03zzn801) && isset($_oour7h9xr1mi1lts)) { $_1lvi65d9egasqdq1 = $this->_lzpth4hdiobcbqxsjugiw->Validate($_if2kvdzioqcrw03zzn801, $_oour7h9xr1mi1lts, LBD_ValidationAttemptOrigin::Client); } if ($_1lvi65d9egasqdq1) { LBD_Persistence_Save("\x4c\102\104\137\x49\x73\123\157\154\x76\145\x64\x5f" . $this->_Imc85ecf3aw50ms0we4q9khjhp, true); } else { LBD_Persistence_Clear("\114\102\x44\137\111\x73\x53\157\x6c\166\x65\144\137" . $this->_Imc85ecf3aw50ms0we4q9khjhp); } return $_1lvi65d9egasqdq1; } public function get_SoundFilename() { if (SoundFormat::WavPcm16bit8kHzMono == $this->SoundFormat) { return "\x63\x61\x70\164\143\x68\141\x5f{$this->InstanceId}\56\167\141\166"; } else if (SoundFormat::WavPcm8bit8kHzMono == $this->SoundFormat) { return "\143\x61\x70\164\143\x68\141\x5f{$this->InstanceId}\x2e\x77\141\166"; } } public function get_CaptchaSoundAvailable() { return $this->_lzpth4hdiobcbqxsjugiw->IsLocalizedPronunciationAvailable; } public function Html() { $this->hac5l(); $_Id5q86z3q4qsx3e1 = "\r\n\x20\40\74\x64\x69\166\40\x63\154\141\163\163\x3d\"\x4c\x42\104\137\x43\x61\x70\164\x63\x68\141\x44\x69\x76\"\40\151\144\x3d\"{$this->_Ol7o9tu23ezj1k4o}\137\x43\141\160\x74\x63\x68\x61\104\151\x76\"\40\163\x74\171\x6c\145\x3d\"\x77\x69\x64\x74\150\x3a{$this->TotalWidth}\160\170\x3b\x20\150\145\151\x67\x68\164\72{$this->TotalHeight}\x70\170\73\"\x3e\x3c\41\x2d\x2d\r\n"; $_Id5q86z3q4qsx3e1 = $this->khamj($_Id5q86z3q4qsx3e1); if ($this->RenderIcons) { $_Id5q86z3q4qsx3e1 .= "\x20\55\x2d\x3e\74\x2f\x64\x69\166\76\74\41\x2d\55\r\n"; } else { $_Id5q86z3q4qsx3e1 .= "\x20\x2d\x2d\76\74\57\x64\151\166\x3e\r\n"; } $_Id5q86z3q4qsx3e1 = $this->e1v7j($_Id5q86z3q4qsx3e1); $_Id5q86z3q4qsx3e1 = $this->ro6yq($_Id5q86z3q4qsx3e1); $_Id5q86z3q4qsx3e1 = $this->txu27($_Id5q86z3q4qsx3e1); $_Id5q86z3q4qsx3e1 .= "\40\x20\74\57\144\151\x76\x3e\r\n"; return $_Id5q86z3q4qsx3e1; } private function hac5l() { $this->Save(); if ($this->n0bgs()) { $this->bf5dl(); } $this->ag1wq(); } private function khamj($_Irwvcgdvmvjwp94w) { $_Irwvcgdvmvjwp94w .= "\x20\x2d\55\76\x3c\144\151\166\x20\143\154\x61\163\x73\x3d\"\114\x42\104\137\x43\x61\160\164\143\150\x61\111\x6d\x61\147\x65\104\151\166\"\40\151\x64\x3d\"{$this->_Ol7o9tu23ezj1k4o}\x5f\x43\141\160\164\143\150\x61\x49\155\x61\x67\x65\104\151\166\"\40\163\164\171\x6c\145\75\"\x77\151\144\x74\x68\72{$this->ImageWidth}\x70\170\40\x21\151\x6d\x70\157\x72\164\141\x6e\x74\73\40\150\x65\151\147\x68\164\72{$this->ImageHeight}\x70\170\x20\x21\151\155\x70\157\162\164\x61\156\x74\x3b\"\x3e\x3c\x21\55\x2d\r\n"; $this->_0i0m3gvq3ybvqkmeya9c72nj16 = $this->_Ih7dnqw2d14eg3u9e4rau; if (!$this->_O9huzvqrfhr64ni0) { $_Irwvcgdvmvjwp94w = $this->fwcdq($_Irwvcgdvmvjwp94w); } else { switch ($this->_ihgdrh3eo9yqu4df9qk2i3z0yj) { case HelpLinkMode::Image: $_Irwvcgdvmvjwp94w = $this->i8v7h($_Irwvcgdvmvjwp94w); break; case HelpLinkMode::Text: $_Irwvcgdvmvjwp94w = $this->eq2b6($_Irwvcgdvmvjwp94w); break; } } return $_Irwvcgdvmvjwp94w; } private function fwcdq($_ii96vtzawql8sdzz) { $_ii96vtzawql8sdzz .= "\x20\40\40\55\x2d\76\74\151\155\x67\x20\143\x6c\x61\x73\x73\x3d\"\114\x42\104\137\x43\141\160\x74\143\150\x61\x49\155\x61\147\x65\"\x20\x69\x64\75\"{$this->_I2il9dsj0s74l6hkrvbet}\"\40\163\162\x63\x3d\"{$this->CaptchaImageUrl}\"\x20\x61\x6c\164\x3d\"{$this->_ieecxhnyopr1hifk1frcf76zr2}\"\x20\57\76\x3c\x21\55\x2d\r\n"; return $_ii96vtzawql8sdzz; } private function i8v7h($_O94pwvedwdi7ozrf2i5jxzoimi) { if ($this->IsTabIndexSet) { $_O94pwvedwdi7ozrf2i5jxzoimi .= "\x20\40\40\55\x2d\x3e\x3c\141\x20\x74\x61\x72\x67\145\x74\x3d\"\137\x62\154\x61\156\153\"\40\150\162\145\x66\75\"{$this->_Ijtytxnlohkwazwisxoax}\"\x20\164\x69\164\154\x65\x3d\"{$this->_Oyeowkwt50s3lkc9n3exp}\"\x20\164\141\x62\x69\x6e\144\145\170\x3d\"{$this->_0i0m3gvq3ybvqkmeya9c72nj16}\"\x20\157\x6e\143\x6c\x69\143\153\x3d\"{$this->_Ol7o9tu23ezj1k4o}\x2e\x4f\156\x48\x65\x6c\160\114\x69\x6e\153\x43\154\151\x63\153\x28\x29\x3b\x20\x72\145\164\x75\x72\156\40{$this->_Ol7o9tu23ezj1k4o}\x2e\x46\x6f\x6c\154\x6f\x77\110\145\154\x70\x4c\x69\x6e\153\73\"\76\74\151\155\147\40\x63\x6c\x61\x73\163\75\"\x4c\x42\104\x5f\103\x61\x70\164\x63\x68\x61\111\155\141\147\x65\"\x20\151\x64\75\"{$this->_I2il9dsj0s74l6hkrvbet}\"\x20\x73\x72\143\75\"{$this->CaptchaImageUrl}\"\x20\141\x6c\164\x3d\"{$this->_ieecxhnyopr1hifk1frcf76zr2}\"\x20\x2f\76\74\57\141\x3e\74\x21\x2d\55\r\n"; if (-1 != $this->_0i0m3gvq3ybvqkmeya9c72nj16) { $this->_0i0m3gvq3ybvqkmeya9c72nj16++; } } else { $_O94pwvedwdi7ozrf2i5jxzoimi .= "\40\x20\x20\55\x2d\x3e\74\141\x20\164\141\162\147\x65\x74\x3d\"\x5f\x62\154\141\x6e\153\"\x20\150\x72\x65\146\x3d\"{$this->_Ijtytxnlohkwazwisxoax}\"\40\164\151\x74\154\x65\75\"{$this->_Oyeowkwt50s3lkc9n3exp}\"\x20\157\x6e\x63\154\151\x63\153\75\"{$this->_Ol7o9tu23ezj1k4o}\x2e\x4f\x6e\110\x65\154\160\114\151\x6e\x6b\x43\x6c\x69\x63\x6b\50\x29\x3b\40\x72\145\164\x75\162\156\x20{$this->_Ol7o9tu23ezj1k4o}\56\106\157\x6c\x6c\157\167\x48\x65\x6c\x70\114\151\156\x6b\73\"\x3e\x3c\x69\x6d\147\x20\143\x6c\141\x73\x73\x3d\"\x4c\x42\104\137\103\141\160\x74\x63\150\141\111\155\x61\147\145\"\40\x69\x64\75\"{$this->_I2il9dsj0s74l6hkrvbet}\"\x20\x73\162\143\75\"{$this->CaptchaImageUrl}\"\x20\x61\x6c\164\x3d\"{$this->_ieecxhnyopr1hifk1frcf76zr2}\"\x20\57\76\74\57\x61\x3e\x3c\x21\55\55\r\n"; } return $_O94pwvedwdi7ozrf2i5jxzoimi; } private function eq2b6($_od0f2c1o0y1oco4myzjnj2flax) { $_Ic8d13y38vb2htitdp1qqy1mhy = $this->TotalHeight - $this->yn8zh(); $_od0f2c1o0y1oco4myzjnj2flax .= "\x20\x20\x20\x2d\55\x3e\74\144\151\x76\40\x63\x6c\141\x73\163\x3d\"\x4c\x42\104\x5f\x43\141\160\x74\x63\150\141\111\155\x61\147\x65\x44\151\166\"\40\163\164\171\x6c\145\x3d\"\x77\x69\x64\164\x68\x3a{$this->ImageWidth}\160\170\73\x20\x68\145\151\147\150\x74\x3a{$_Ic8d13y38vb2htitdp1qqy1mhy}\160\x78\x3b\"\76\x3c\x69\155\147\40\x63\x6c\x61\x73\x73\75\"\114\102\104\x5f\103\141\x70\164\143\x68\x61\x49\155\x61\x67\x65\"\40\x69\144\x3d\"{$this->_I2il9dsj0s74l6hkrvbet}\"\x20\163\x72\143\x3d\"{$this->CaptchaImageUrl}\"\x20\141\154\x74\x3d\"{$this->_ieecxhnyopr1hifk1frcf76zr2}\"\40\57\x3e\x3c\x2f\x64\x69\166\x3e\x3c\x21\x2d\x2d\r\n"; $_Otp1gkfnb8ivfstwogja5hglxq = $this->yn8zh(); $_0l7xkuk02wczmspysf4eb = $_Otp1gkfnb8ivfstwogja5hglxq - 1; if ($this->IsTabIndexSet) { $_od0f2c1o0y1oco4myzjnj2flax .= "\x20\40\40\55\x2d\x3e\74\x61\x20\150\162\x65\146\75\"{$this->_Ijtytxnlohkwazwisxoax}\"\40\x74\141\162\147\145\164\x3d\"\137\142\x6c\141\x6e\153\"\40\164\x61\x62\x69\156\x64\x65\x78\x3d\"{$this->_0i0m3gvq3ybvqkmeya9c72nj16}\"\x20\164\x69\164\x6c\145\x3d\"{$this->_Oyeowkwt50s3lkc9n3exp}\"\40\x73\164\171\x6c\x65\x3d\"\x64\151\163\160\154\141\x79\x3a\x20\142\x6c\157\x63\153\40\41\x69\x6d\x70\157\x72\x74\x61\156\x74\x3b\40\x68\x65\x69\147\x68\164\x3a\40{$_Otp1gkfnb8ivfstwogja5hglxq}\x70\170\x20\41\151\155\160\157\x72\x74\x61\156\x74\73\40\x6d\141\162\x67\151\x6e\x3a\x20\x30\40\x21\151\155\x70\157\162\164\x61\156\164\73\x20\x70\141\144\144\x69\x6e\147\72\40\x30\x20\41\x69\x6d\160\157\x72\x74\141\x6e\164\x3b\40\146\x6f\x6e\164\x2d\163\x69\172\145\72\40{$_0l7xkuk02wczmspysf4eb}\x70\170\x20\x21\x69\155\x70\157\162\x74\141\x6e\x74\73\40\x6c\x69\x6e\x65\55\150\x65\151\147\150\x74\x3a\40{$_Otp1gkfnb8ivfstwogja5hglxq}\160\x78\x20\41\151\x6d\x70\157\x72\x74\x61\156\164\73\40\166\151\x73\151\x62\151\x6c\151\x74\171\72\40\x76\151\163\x69\142\154\x65\x20\x21\151\x6d\160\x6f\x72\x74\x61\156\x74\x3b\40\146\x6f\x6e\x74\55\x66\x61\155\x69\x6c\171\72\x20\126\145\x72\144\141\x6e\141\54\x20\x44\145\152\x61\x56\x75\x20\123\x61\156\x73\54\40\102\x69\164\x73\x74\162\145\141\x6d\x20\x56\x65\x72\x61\40\123\141\x6e\x73\x2c\40\126\x65\162\144\x61\156\141\x20\122\145\146\54\x20\x73\141\156\x73\x2d\163\145\162\151\146\40\41\151\x6d\x70\157\x72\164\x61\156\164\73\x20\166\x65\162\164\x69\143\x61\x6c\x2d\x61\x6c\x69\147\156\x3a\x20\155\x69\x64\144\154\x65\40\x21\151\x6d\160\x6f\162\x74\x61\x6e\164\73\x20\x74\x65\x78\164\55\x61\154\x69\x67\156\x3a\40\x63\145\156\x74\145\x72\40\41\151\155\160\x6f\x72\x74\141\x6e\x74\x3b\40\x74\x65\170\164\x2d\144\x65\143\x6f\x72\141\x74\x69\x6f\156\x3a\x20\156\157\156\x65\40\41\x69\x6d\160\x6f\162\164\x61\x6e\x74\x3b\40\x62\x61\x63\x6b\147\162\x6f\x75\x6e\144\x2d\x63\x6f\154\157\162\x3a\x20\43\146\x38\x66\x38\146\x38\x20\41\x69\x6d\x70\x6f\162\x74\x61\x6e\164\73\40\143\x6f\154\157\162\72\x20\43\x36\60\x36\60\66\x30\40\41\151\x6d\x70\x6f\x72\x74\141\x6e\x74\x3b\"\76{$this->_Oyeowkwt50s3lkc9n3exp}\x3c\x2f\141\x3e\x3c\41\55\x2d\r\n"; if (-1 != $this->_0i0m3gvq3ybvqkmeya9c72nj16) { $this->_0i0m3gvq3ybvqkmeya9c72nj16++; } } else { $_od0f2c1o0y1oco4myzjnj2flax .= "\40\x20\40\55\x2d\x3e\x3c\x61\40\150\162\145\x66\x3d\"{$this->_Ijtytxnlohkwazwisxoax}\"\40\164\141\x72\x67\x65\164\x3d\"\x5f\x62\x6c\x61\156\x6b\"\40\x74\x69\x74\x6c\145\x3d\"{$this->_Oyeowkwt50s3lkc9n3exp}\"\40\x73\164\x79\x6c\145\x3d\"\144\151\163\160\154\141\171\72\40\142\154\157\x63\x6b\x20\x21\151\155\160\157\162\164\x61\x6e\x74\x3b\40\150\145\151\x67\x68\x74\72\x20{$_Otp1gkfnb8ivfstwogja5hglxq}\x70\170\x20\x21\151\x6d\x70\x6f\x72\164\x61\x6e\164\x3b\40\x6d\x61\x72\147\x69\156\x3a\40\60\x20\x21\x69\155\x70\x6f\162\x74\x61\156\x74\73\40\x70\141\144\144\151\156\x67\x3a\40\x30\40\x21\151\x6d\x70\157\162\x74\141\156\x74\x3b\x20\146\x6f\156\164\55\x73\151\x7a\145\72\x20{$_0l7xkuk02wczmspysf4eb}\x70\x78\40\x21\x69\x6d\160\x6f\162\164\x61\156\164\73\40\154\151\156\145\x2d\150\x65\x69\147\150\164\72\x20{$_0l7xkuk02wczmspysf4eb}\x70\170\x20\41\151\x6d\160\x6f\162\x74\x61\x6e\164\73\40\166\x69\163\x69\142\151\154\151\x74\x79\72\40\x76\x69\163\x69\142\x6c\145\40\x21\151\155\160\x6f\x72\x74\x61\156\x74\73\x20\x66\x6f\156\164\x2d\146\x61\155\x69\x6c\171\x3a\40\x56\x65\162\x64\x61\x6e\141\x2c\40\104\145\152\x61\126\x75\40\x53\141\156\163\54\x20\x42\151\x74\x73\164\162\145\x61\155\40\126\145\x72\141\x20\123\141\x6e\x73\54\40\x56\x65\162\144\x61\156\141\x20\122\x65\x66\x2c\40\163\141\x6e\x73\55\163\x65\162\151\x66\40\x21\x69\155\160\x6f\162\x74\141\x6e\x74\x3b\40\166\145\162\164\151\143\141\154\x2d\141\x6c\x69\147\156\x3a\x20\x6d\x69\x64\144\154\x65\40\x21\151\x6d\x70\157\x72\x74\x61\x6e\164\x3b\x20\164\x65\x78\164\55\141\x6c\x69\147\x6e\72\40\x63\145\x6e\x74\x65\x72\x20\41\151\x6d\x70\157\162\164\x61\x6e\x74\73\40\x74\145\x78\164\x2d\x64\x65\x63\157\x72\141\x74\151\x6f\156\72\40\156\157\x6e\x65\x20\x21\x69\x6d\x70\x6f\x72\164\141\156\x74\x3b\40\142\x61\x63\x6b\x67\162\157\x75\156\x64\55\143\x6f\154\157\x72\x3a\x20\x23\146\x38\146\x38\x66\70\40\41\151\x6d\160\x6f\162\164\141\156\164\73\x20\143\157\x6c\x6f\x72\x3a\x20\x23\66\60\66\60\66\60\x20\x21\151\x6d\x70\157\162\164\x61\x6e\164\x3b\"\76{$this->_Oyeowkwt50s3lkc9n3exp}\x3c\57\x61\x3e\x3c\x21\x2d\55\r\n"; } return $_od0f2c1o0y1oco4myzjnj2flax; } private function e1v7j($_I44bc7fvk8f2v2h0fxukdx8oy4) { if ($this->RenderIcons) { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\40\55\x2d\x3e\x3c\144\x69\166\x20\143\x6c\141\x73\163\x3d\"\114\102\x44\x5f\x43\x61\160\164\143\150\141\111\143\157\156\x73\x44\x69\x76\"\40\151\144\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\103\141\160\x74\x63\x68\141\111\x63\x6f\156\x73\104\x69\166\"\x20\163\x74\x79\x6c\x65\x3d\"\x77\151\x64\x74\150\x3a\x20{$this->IconsDivWidth}\160\x78\x20\x21\x69\155\x70\x6f\x72\x74\141\156\164\73\"\x3e\x3c\x21\x2d\55\r\n"; if ($this->ReloadEnabled) { if ($this->IsTabIndexSet) { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\x20\40\x20\55\55\x3e\x3c\141\x20\143\x6c\141\163\163\75\"\x4c\102\104\x5f\122\145\x6c\x6f\x61\x64\114\x69\x6e\x6b\"\40\x69\x64\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\122\145\x6c\x6f\x61\x64\114\x69\x6e\x6b\"\x20\150\162\145\146\x3d\"\x23\"\40\164\x61\142\x69\156\x64\x65\170\75\"{$this->_0i0m3gvq3ybvqkmeya9c72nj16}\"\40\157\x6e\143\x6c\151\143\153\x3d\"{$this->_Ol7o9tu23ezj1k4o}\x2e\122\x65\154\157\141\144\111\x6d\141\147\x65\50\x29\x3b\40\x74\x68\x69\163\56\x62\x6c\x75\162\50\x29\x3b\x20\x72\x65\x74\x75\162\x6e\x20\146\x61\154\163\145\x3b\"\40\x74\x69\164\x6c\x65\75\"{$this->_149dg093buahqprv}\"\x3e\74\151\x6d\x67\40\x63\x6c\x61\163\x73\x3d\"\114\x42\x44\137\122\x65\x6c\x6f\x61\x64\x49\143\x6f\156\"\x20\151\144\x3d\"{$this->_Ol7o9tu23ezj1k4o}\137\x52\145\154\157\x61\144\111\143\x6f\x6e\"\40\163\162\x63\x3d\"{$this->_11k0ug73nrwxamg0504zy}\"\40\x61\154\164\x3d\"{$this->_149dg093buahqprv}\"\40\57\76\74\57\x61\x3e\x3c\x21\55\55\r\n"; if (-1 != $this->_0i0m3gvq3ybvqkmeya9c72nj16) { $this->_0i0m3gvq3ybvqkmeya9c72nj16++; } } else { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\40\x20\x20\55\55\76\x3c\x61\40\143\154\141\163\x73\x3d\"\x4c\102\104\137\x52\145\154\157\x61\144\x4c\x69\x6e\x6b\"\40\151\144\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\x52\x65\154\x6f\141\144\114\x69\156\153\"\x20\x68\x72\145\146\75\"\x23\"\x20\157\156\143\x6c\151\x63\x6b\75\"{$this->_Ol7o9tu23ezj1k4o}\56\x52\145\154\157\141\x64\x49\155\x61\x67\x65\x28\51\x3b\x20\x74\150\151\x73\56\142\154\165\x72\50\x29\73\40\x72\x65\164\x75\162\156\x20\146\141\154\163\x65\73\"\40\164\151\164\x6c\145\x3d\"{$this->_149dg093buahqprv}\"\76\x3c\151\x6d\147\40\x63\x6c\141\163\x73\75\"\114\x42\x44\x5f\x52\x65\154\157\x61\x64\111\x63\x6f\156\"\40\x69\x64\75\"{$this->_Ol7o9tu23ezj1k4o}\137\x52\x65\x6c\157\141\144\x49\x63\157\156\"\40\163\162\143\75\"{$this->_11k0ug73nrwxamg0504zy}\"\40\x61\154\x74\x3d\"{$this->_149dg093buahqprv}\"\40\57\x3e\x3c\57\141\76\74\41\x2d\x2d\r\n"; } } $_Ihpad0wigkrqd999m1dzymqq4z = $this->CaptchaSoundUrl; if ($this->SoundEnabled) { if ($this->CaptchaSoundAvailable) { if ($this->IsTabIndexSet) { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\x20\40\40\55\55\76\74\141\40\x63\x6c\x61\x73\x73\x3d\"\114\102\x44\137\123\157\x75\x6e\x64\x4c\x69\156\153\"\40\151\144\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\x53\157\x75\156\144\x4c\151\x6e\x6b\"\40\150\x72\145\x66\75\"{$_Ihpad0wigkrqd999m1dzymqq4z}\"\x20\x74\141\x62\151\x6e\144\x65\170\75\"{$this->_0i0m3gvq3ybvqkmeya9c72nj16}\"\x20\x6f\x6e\x63\154\151\143\x6b\75\"{$this->_Ol7o9tu23ezj1k4o}\x2e\x50\154\x61\171\x53\157\x75\156\144\50\51\73\40\164\150\151\x73\x2e\x62\x6c\165\162\x28\51\x3b\40\x72\145\164\165\x72\156\x20\146\141\154\163\145\x3b\"\40\x74\151\164\154\145\x3d\"{$this->_i4b2z3s6tcutjl8v59qkknsbgb}\"\40\x74\x61\162\x67\x65\164\x3d\"\x5f\x62\x6c\141\156\153\"\x3e\x3c\x69\x6d\147\x20\143\x6c\x61\x73\163\x3d\"\x4c\x42\x44\x5f\x53\x6f\165\156\x64\111\x63\x6f\156\"\40\x69\x64\75\"{$this->_Ol7o9tu23ezj1k4o}\137\x53\x6f\165\x6e\144\x49\x63\x6f\x6e\"\40\x73\x72\x63\x3d\"{$this->_Iy3xqz8rbb0ymyt7yzb8b}\"\x20\x61\x6c\x74\75\"{$this->_i4b2z3s6tcutjl8v59qkknsbgb}\"\40\57\x3e\x3c\x2f\x61\76\74\x21\55\x2d\r\n"; } else { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\40\40\x20\55\x2d\76\74\141\x20\143\x6c\x61\x73\x73\x3d\"\x4c\x42\x44\x5f\123\x6f\x75\x6e\x64\x4c\151\156\153\"\x20\x69\144\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\123\x6f\165\x6e\144\114\151\156\153\"\x20\x68\162\x65\146\x3d\"{$_Ihpad0wigkrqd999m1dzymqq4z}\"\40\157\156\x63\154\x69\143\153\75\"{$this->_Ol7o9tu23ezj1k4o}\x2e\x50\x6c\141\x79\123\x6f\165\x6e\x64\50\51\x3b\x20\x74\150\151\163\56\142\154\165\162\x28\x29\x3b\40\162\x65\164\165\x72\x6e\40\146\141\x6c\x73\145\73\"\x20\164\x69\164\154\x65\x3d\"{$this->_i4b2z3s6tcutjl8v59qkknsbgb}\"\x20\164\141\x72\x67\145\164\75\"\x5f\x62\154\141\x6e\153\"\x3e\74\x69\155\x67\x20\x63\154\141\163\163\75\"\114\102\x44\x5f\123\157\x75\156\x64\x49\x63\157\156\"\x20\151\144\75\"{$this->_Ol7o9tu23ezj1k4o}\137\x53\x6f\165\156\x64\111\x63\x6f\x6e\"\x20\x73\x72\x63\x3d\"{$this->_Iy3xqz8rbb0ymyt7yzb8b}\"\40\141\154\x74\x3d\"{$this->_i4b2z3s6tcutjl8v59qkknsbgb}\"\x20\x2f\x3e\x3c\x2f\x61\x3e\74\41\x2d\x2d\r\n"; } } else { $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\40\40\40\55\x2d\76\74\x61\x20\x74\x61\x72\147\145\x74\75\"\x5f\x62\x6c\141\x6e\153\"\x20\x63\x6c\141\x73\x73\75\"\114\102\104\x5f\x44\151\163\141\x62\x6c\145\144\114\x69\156\x6b\"\x20\x69\x64\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\123\157\x75\156\x64\x4c\151\156\x6b\"\40\150\162\145\x66\75\"\x23\"\x20\164\141\x62\151\x6e\144\x65\x78\75\"{$this->_0i0m3gvq3ybvqkmeya9c72nj16}\"\40\x6f\x6e\x63\154\151\x63\x6b\x3d\"\x74\x68\151\x73\56\x62\154\165\x72\50\51\73\"\76\x3c\151\x6d\147\x20\143\x6c\x61\163\x73\75\"\x4c\x42\104\x5f\123\157\165\156\x64\111\143\x6f\x6e\"\40\x69\144\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\123\x6f\x75\156\144\x49\x63\157\x6e\"\40\x73\x72\x63\75\"{$this->_Iy3xqz8rbb0ymyt7yzb8b}\"\40\x61\154\164\75\"\"\x20\57\x3e\74\x73\160\141\156\x20\x73\164\171\x6c\145\x3d\"\x63\157\x6c\x6f\x72\x3a\x72\145\x64\40\x21\151\155\x70\157\x72\x74\x61\x6e\x74\x3b\"\76{$this->_i4b2z3s6tcutjl8v59qkknsbgb}\x3c\57\x73\x70\141\156\x3e\x3c\x2f\x61\76\x3c\x21\55\x2d\r\n"; } } if ($this->SoundEnabled) { $_I44bc7fvk8f2v2h0fxukdx8oy4 .="\x20\40\40\55\x2d\76\x3c\144\x69\166\40\x63\x6c\141\x73\x73\75\"\114\x42\104\137\120\154\x61\143\x65\150\x6f\154\144\x65\162\"\x20\x69\x64\75\"{$this->_Ol7o9tu23ezj1k4o}\x5f\101\165\x64\151\157\120\x6c\x61\143\145\x68\x6f\154\144\x65\162\"\76\46\x6e\x62\163\160\x3b\x3c\x2f\144\x69\x76\x3e\74\41\55\x2d\r\n"; } $_I44bc7fvk8f2v2h0fxukdx8oy4 .= "\40\x2d\55\76\74\57\x64\x69\x76\x3e\r\n"; } return $_I44bc7fvk8f2v2h0fxukdx8oy4; } private function ro6yq($_l21s48lz2d2l6179) { $_oekmge30o7xamcotuk74u = $this->_l733an859wsvpkroc6vbx->AutoFocusInput ? "\164\x72\x75\x65" : "\146\141\x6c\x73\145"; $_ir5q30aq5rcb4fl1lv0fbc0eua = $this->_l733an859wsvpkroc6vbx->AutoClearInput ? "\x74\x72\165\x65" : "\x66\141\154\x73\145"; $_o5cyocuhe0g2c5al9w7e9gutry = false; if (isset($this->_l733an859wsvpkroc6vbx->AutoLowercaseInput)) { $_o5cyocuhe0g2c5al9w7e9gutry = $this->_l733an859wsvpkroc6vbx->AutoLowercaseInput ? "\x74\162\x75\145" : "\x66\x61\x6c\163\145"; } else if (isset($this->_l733an859wsvpkroc6vbx->AutoUppercaseInput)) { $_o5cyocuhe0g2c5al9w7e9gutry = $this->_l733an859wsvpkroc6vbx->AutoUppercaseInput ? "\164\162\165\145" : "\x66\141\x6c\x73\x65"; } $_1pefzpz9vrqrow5t = $this->_l733an859wsvpkroc6vbx->AutoReloadExpiredCaptchas ? "\x74\162\x75\145" : "\x66\141\x6c\163\145"; $_05qamv9jggb3harknrm2o9six7 = $this->_l733an859wsvpkroc6vbx->AutoReloadTimeout; $_iwlve06qmcj21mtwimqxvsvr5q = $this->_l733an859wsvpkroc6vbx->SoundStartDelay; $_01k373sq3h6w4cxkgx1j5vhooq = ($this->SoundRegenerationMode == SoundRegenerationMode::Limited) ? "\164\x72\x75\145" : "\146\141\154\163\x65"; $_l21s48lz2d2l6179 .= "\x20\40\x20\x20\x3c\163\x63\x72\151\x70\x74\40\163\162\143\x3d\"{$this->ScriptIncludeUrl}\"\40\164\x79\x70\145\75\"\x74\x65\x78\164\x2f\152\141\166\141\x73\143\x72\151\x70\x74\"\x3e\74\57\x73\x63\x72\151\160\x74\76\r\n"; $_l21s48lz2d2l6179 .= "\40\x20\40\x20\x3c\163\143\162\x69\x70\164\40\164\171\160\145\x3d\"\164\x65\170\164\57\x6a\141\x76\141\163\143\162\151\x70\164\"\76\x2f\x2f\74\41\x5b\103\104\101\x54\101\x5b\r\n"; $_l21s48lz2d2l6179 .= "\x20\x20\x20\x20\40\40\x42\157\164\104\145\x74\x65\x63\164\56\x49\156\x69\x74\x28\47{$this->_Ol7o9tu23ezj1k4o}\47\x2c\x20\x27{$this->InstanceId}\47\54\40\x27{$this->_0favyaytwiphy1ul}\47\54\x20{$_oekmge30o7xamcotuk74u}\x2c\40{$_ir5q30aq5rcb4fl1lv0fbc0eua}\x2c\x20{$_o5cyocuhe0g2c5al9w7e9gutry}\54\40{$_1pefzpz9vrqrow5t}\x2c\40{$this->CodeTimeout}\x2c\40{$_05qamv9jggb3harknrm2o9six7}\x2c\40{$_iwlve06qmcj21mtwimqxvsvr5q}\54\40{$_01k373sq3h6w4cxkgx1j5vhooq}\x29\x3b\r\n"; $_l21s48lz2d2l6179 .= "\40\40\40\40\57\57\135\135\76\74\x2f\163\x63\162\151\x70\164\x3e\r\n"; $_l21s48lz2d2l6179 .= "\x20\x20\40\x20\74\151\x6e\160\x75\164\x20\x74\171\160\x65\75\"\x68\x69\x64\144\145\156\"\x20\156\x61\x6d\145\75\"{$this->_Ifpec6wxzoan3yjqndbvc}\"\40\151\144\x3d\"{$this->_Ifpec6wxzoan3yjqndbvc}\"\x20\x76\x61\154\x75\145\75\"{$this->InstanceId}\"\x20\x2f\x3e\r\n"; $_l21s48lz2d2l6179 .= "\40\x20\x20\x20\x3c\151\156\160\165\164\40\x74\171\x70\x65\75\"\x68\151\144\144\145\x6e\"\40\x6e\141\155\145\x3d\"\114\102\104\137\102\x61\143\153\x57\x6f\x72\153\141\162\157\x75\156\x64\137{$this->_Ol7o9tu23ezj1k4o}\"\40\x69\x64\75\"\x4c\102\104\137\102\x61\143\x6b\127\x6f\x72\x6b\141\x72\157\165\x6e\144\137{$this->_Ol7o9tu23ezj1k4o}\"\x20\166\141\154\165\145\75\"\60\"\40\57\76\r\n"; return $_l21s48lz2d2l6179; } private function txu27($_Oqwq55kb8tlq13tyljtwhoz92l) { $this->_0vq4s1itqp5tomef = LBD_RemoteScriptHelper::GetRemoteScriptEnabled($this->_0vq4s1itqp5tomef); if ($this->_0vq4s1itqp5tomef) { $_Oqwq55kb8tlq13tyljtwhoz92l .= LBD_RemoteScriptHelper::GetRemoteScriptMarkup(); } return $_Oqwq55kb8tlq13tyljtwhoz92l; } public static function IsFree() { return LBD_CaptchaBase::IsFree; } public static function GetProductInfo() { return LBD_CaptchaBase::$ProductInfo; } private function yn8zh() { return $this->HelpLinkHeight; } public function __get($_idg0vsdfcgqgf9pp) { if (method_exists($this->_lzpth4hdiobcbqxsjugiw, ($_od6liero2ac42pob4t20pg8g9k = "\147\145\164\x5f".$_idg0vsdfcgqgf9pp))) { return $this->_lzpth4hdiobcbqxsjugiw->$_od6liero2ac42pob4t20pg8g9k(); } else if (method_exists($this, ($_od6liero2ac42pob4t20pg8g9k = "\x67\145\x74\137".$_idg0vsdfcgqgf9pp))) { return $this->$_od6liero2ac42pob4t20pg8g9k(); } else return; } public function __isset($_0l3kl6e5b5t7k05f4dyae9o1k8) { if (method_exists($this->_lzpth4hdiobcbqxsjugiw, ($_o8imkorb69uavfpn = "\x69\x73\x73\145\164\x5f".$_0l3kl6e5b5t7k05f4dyae9o1k8))) { return $this->_lzpth4hdiobcbqxsjugiw->$_o8imkorb69uavfpn(); } else if (method_exists($this, ($_o8imkorb69uavfpn = "\x69\x73\x73\145\164\x5f".$_0l3kl6e5b5t7k05f4dyae9o1k8))) { return $this->$_o8imkorb69uavfpn(); } else return; } public function __set($_iim0o0wuf9dt663pmzz44x91zq, $_l8oi0w8w3q2lcfo0gsi0v) { if (method_exists($this->_lzpth4hdiobcbqxsjugiw, ($_lpuddufllnqdden7 = "\x73\x65\x74\137".$_iim0o0wuf9dt663pmzz44x91zq))) { $this->_lzpth4hdiobcbqxsjugiw->$_lpuddufllnqdden7($_l8oi0w8w3q2lcfo0gsi0v); } else if (method_exists($this, ($_lpuddufllnqdden7 = "\x73\145\164\x5f".$_iim0o0wuf9dt663pmzz44x91zq))) { $this->$_lpuddufllnqdden7($_l8oi0w8w3q2lcfo0gsi0v); } } public function __unset($_O8ddqnyh13m3kz7lq0d9l) { if (method_exists($this->_lzpth4hdiobcbqxsjugiw, ($_0ik8i97vvezpujz6yijwvrp9co = "\x75\x6e\163\145\x74\x5f".$_O8ddqnyh13m3kz7lq0d9l))) { $this->_lzpth4hdiobcbqxsjugiw->$_0ik8i97vvezpujz6yijwvrp9co(); } else if (method_exists($this, ($_0ik8i97vvezpujz6yijwvrp9co = "\x75\156\x73\x65\x74\137".$_O8ddqnyh13m3kz7lq0d9l))) { $this->$_0ik8i97vvezpujz6yijwvrp9co(); } } } ?>