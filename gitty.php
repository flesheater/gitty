<?php
/**
 * @file
 * An example how you could easily show your repositories on a webpage.
 * You just have to change the 2 constants to make it work for your case. 
 * 
 */

  // for example your github user
  define("USER", "flesheater");
  
  // A token that you could generate from your own github account 
  // go here https://github.com/settings/applications and create a token
  // then replace the next string
  define("TOKEN", "4f3dabe225a49ac2bc1d9e97b6a7675c5848f296");
  
  // We generate the url for curl
  $curl_url = 'https://api.github.com/users/' . USER . '/repos';
  
  // We generate the header part for the token
  $http_header_token_auth = 'Authorization: token ' . TOKEN;
  
  // We set the nesesary 
  $http_header_app = 'User-Agent: Awesome-Octocat-App';
  
  // We make the actuall curl initialization
  $ch = curl_init($curl_url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
  // We set the right headers: any user agent type, and then the custom token
  // header part that we generated
  curl_setopt($ch, CURLOPT_HTTPHEADER, array($http_header_app, $http_header_token_auth));
  
  // We execute the curl
  $output = curl_exec($ch);

  // And we make sure we close the curl
  curl_close($ch);
  
  // Then we decode the output and we could do whatever we want with it
  $output = json_decode($output);

  // Here we have the output. Since we like Github we must consider caching the
  // result and fetching it once a day or so
  if (!empty($output) && empty($output->message)) {
    // now you could just foreach the repos and show them
    foreach ($output as $repo) {
      print '<a href="' . $repo->html_url . '">' . $repo->name . '</a><br />';
    }
  }
  elseif (!empty($output->message)) {
    // better log this instead of showing
    print $output->message;
  }

?>