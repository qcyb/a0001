<?php
//Copyright (c) 2016 iFeiwu.com
 class Log extends Item { function __construct() { $this->table = "\x6c\x6f\147"; parent::__construct(); } protected function callbackPageAfter(&$data) { $data["\154\151\x73\164"] = $this->_getData($data["\154\x69\163\164"]); } protected function getLately() { $list = $this->db->select($this->table)->where("\x70\151\x64\40\75\40\x30")->order("\x63\164\x69\155\x65\40\x44\105\x53\103")->limit(4)->all(); return $this->success($this->_getData($list)); } protected function postDelete($request_data) { goto mYfnP; lUmDK: goto EP85o; goto ovsWx; I2NUD: return $this->error(); goto lUmDK; fSfZM: foreach ($ids as $id) { goto oKm7d; V6O7Z: $error[] = $id; goto oEEgB; oEEgB: veP9Y: goto jzOJo; jzOJo: jicKL: goto wP5cm; oKm7d: if (!$this->db->delete($this->table, array("\151\x64", "\75", $id))->is()) { goto veP9Y; } goto V6O7Z; wP5cm: } goto bzUYh; bzUYh: vDMsE: goto zINgE; zINgE: if (count($error) === 0) { goto jBh2o; } goto I2NUD; DdmxJ: return $this->success(); goto Wo6JW; AKD8p: $ids = $request_data["\151\x64"]; goto fSfZM; Wo6JW: EP85o: goto Wa63F; mYfnP: $error = array(); goto AKD8p; ovsWx: jBh2o: goto DdmxJ; Wa63F: } private function _getData($data) { goto BpMQy; BpMQy: foreach ($data as $key => $value) { goto frkUd; Z7TMU: switch ($type) { case "\154\157\x67\x69\x6e": goto kVK9U; RiaRe: goto Lng0Y; goto iFfqO; kVK9U: $data[$key]["\x69\143\x6f\x6e"] = "\141\x63\x63\157\165\x6e\x74"; goto BH4fU; BH4fU: $data[$key]["\164\x69\164\154\x65"] = "\347\231\273\xe5\205\245\xe7\275\x91\347\xab\231\345\220\216\xe5\x8f\xb0"; goto RiaRe; iFfqO: case "\141\x64\x64": goto rEqvS; Gkl2d: $data[$key]["\164\151\164\154\145"] = "\346\xb7\273\xe5\212\xa0\346\225\xb0\xe6\x8d\xae\72\46\x6e\142\x73\x70\x3b\x3c\141\x20\x68\162\145\146\75\x22" . ($url . "\x26\x69\x64\x3d" . $value["\164\x61\x62\154\x65\137\x69\x64"]) . "\42\76" . $title . "\74\57\x61\76"; goto ngG_q; ngG_q: goto Lng0Y; goto IUjYV; rEqvS: $data[$key]["\151\x63\x6f\156"] = "\160\154\165\x73"; goto Gkl2d; IUjYV: case "\165\160\144\x61\164\145": goto hJwnN; E0H38: goto Lng0Y; goto UQO3g; kWnIf: $data[$key]["\x74\151\164\154\x65"] = "\346\233\264\346\226\260\346\225\260\346\x8d\256\x3a\46\156\142\163\x70\x3b\x3c\x61\40\150\162\x65\146\75\42" . $url . "\42\x3e" . $title . "\x3c\x2f\x61\76"; goto E0H38; hJwnN: $data[$key]["\151\x63\157\x6e"] = "\x70\145\156\143\x69\x6c"; goto kWnIf; UQO3g: case "\162\145\x6d\x6f\166\x65": goto zfscm; YAxe4: goto Lng0Y; goto YG35L; zfscm: $data[$key]["\151\143\157\x6e"] = "\x64\x65\x6c\145\x74\145\55\x66\157\162\x65\x76\x65\x72"; goto FaCO6; FaCO6: $data[$key]["\164\x69\164\154\145"] = "\347\xa7\273\351\x99\xa4\46\156\142\x73\160\x3b\x3c\x61\40\150\162\x65\x66\75\x22" . $url . "\42\x3e" . $title . "\x3c\x2f\x61\76\46\x6e\x62\163\x70\x3b\xe6\x9d\241\346\x95\xb0\xe6\x8d\256\xe5\x88\xb0\xe5\x9b\236\xe6\x94\266\xe7\253\x99"; goto YAxe4; YG35L: case "\x72\x65\x70\154\x79": goto fzO8Q; fzO8Q: $data[$key]["\x69\x63\x6f\x6e"] = "\162\145\x70\x6c\x79"; goto AXcne; KdjWE: goto Lng0Y; goto GbVOS; AXcne: $data[$key]["\164\x69\164\154\145"] = "\xe4\273\216\345\233\x9e\xe6\x94\266\347\xab\x99\346\201\242\345\xa4\215\x26\156\142\x73\x70\x3b\x3c\x61\40\x68\x72\145\146\75\42" . $url . "\x22\76" . $title . "\74\57\141\x3e\x26\156\x62\163\x70\x3b\346\x9d\241\xe6\225\260\xe6\215\256"; goto KdjWE; GbVOS: case "\x64\x65\x6c\145\x74\x65": $data[$key]["\x69\x63\x6f\156"] = "\144\145\x6c\145\164\x65\55\166\141\162\x69\x61\156\x74"; $data[$key]["\x74\151\x74\x6c\145"] = "\xe5\275\xbb\345\xba\225\xe5\210\xa0\351\x99\xa4\46\x6e\142\163\160\x3b\x3c\x61\40\150\x72\x65\x66\x3d\x22" . $url . "\42\76" . $title . "\x3c\57\x61\x3e\x26\x6e\x62\163\160\x3b\346\235\241\xe6\x95\260\xe6\x8d\256"; default: goto Lng0Y; } goto z2y71; frkUd: $type = $value["\164\171\x70\x65"]; goto gowIE; gowIE: $title = $value["\164\151\x74\x6c\145"]; goto Rzppg; e95V2: mZGHS: goto Pm0X9; z2y71: fYa_B: goto vUVRN; vUVRN: Lng0Y: goto e95V2; Rzppg: $url = $value["\x75\162\x6c"]; goto Z7TMU; Pm0X9: } goto AZqWz; wUeYO: return $data; goto oIoDE; AZqWz: pFn4r: goto wUeYO; oIoDE: } }
