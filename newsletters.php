<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $names = explode(' ', $name);
    if (!isset($names[1])) {
        $names[1] = '';
    }
    $email = $_POST['email'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        $apiKey = '6d4ffd770d5ad03ed19e975a0e07a323-us17';
        $listID = 'd5c19083a9';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $names[0],
                'LNAME'     => $names[1]
            ]
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        //echo $result;
        // store the status message based on response code
        if ($httpCode == 200) {
            $msg['Status'] = 'successNewsletters';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg2 = 'existsNewsletters';
                    break;
                default:
                    $msg2 = 'errorNewsletters';
                    break;
            }
            $msg['Status'] = $msg2;
        }
    }else{
        $msg['Status'] = 'emailerror';
    }
}
echo json_encode($msg);
?>