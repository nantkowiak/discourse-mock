<?php

const STORAGE_FILE = __FILE__.".storage.json";

if (!file_exists(STORAGE_FILE)) {
    file_put_contents(STORAGE_FILE,print_r( [],true)."\r\n");
}

$storage = json_decode(file_get_contents(STORAGE_FILE), true);

if (!empty($routes[2]) && !empty($storage[$routes[2]])) {
    header('Content-Type: text/html');
    include 'post/post.php';
    die();

}


$fields = [
    "title" => "string", // user_title
    "raw" => "string|required", // raw
    "topic_id" => "integer", // topic_id
    "category" => "integer", //
    "target_recipients" => "string", //
    "archetype" => "string",
    "created_at" => "string",
    "reply_to_post_number" => "integer",
    "embed_url" => "string",
    "external_id" => "string"
];

foreach ($fields as $field => $validatorRuleSet) {
    $validatorRuleSet = explode('|', $validatorRuleSet);
    $type = $validatorRuleSet[0];
    $required = !empty($validatorRuleSet[1]);

    if ($required && empty($input[$field])) {
        http_response_code(400);
        die(json_encode(['status' => 'missing required "'.$field.'" parameter']));
    }

    switch ($type) {
        case "integer":
            if (isset($input[$field])) {
                $input[$field] = (int)$input[$field];
            }
    }
}


$mask = <<<'EOL'
{
  "id": %d,
  "name": "%s",
  "username": "%s",
  "avatar_template": "string",
  "created_at": "%d",
  "raw": "%s",
  "cooked": "string",
  "post_number": 0,
  "post_type": 1,
  "updated_at": "%d",
  "reply_count": 0,
  "reply_to_post_number": "string",
  "quote_count": 0,
  "incoming_link_count": 0,
  "reads": 0,
  "readers_count": 0,
  "score": 0,
  "yours": true,
  "topic_id": 0,
  "topic_slug": "string",
  "display_username": "%s",
  "primary_group_name": "string",
  "flair_name": "string",
  "flair_url": "string",
  "flair_bg_color": "string",
  "flair_color": "string",
  "flair_group_id": 0,
  "badges_granted": [
    null
  ],
  "version": 0,
  "can_edit": true,
  "can_delete": true,
  "can_recover": true,
  "can_see_hidden_post": true,
  "can_wiki": true,
  "user_title": "%s",
  "bookmarked": true,
  "actions_summary": [
    {
      "id": 0,
      "can_act": true
    }
  ],
  "moderator": true,
  "admin": true,
  "staff": true,
  "user_id": 0,
  "draft_sequence": 0,
  "hidden": true,
  "trust_level": 0,
  "deleted_at": "string",
  "user_deleted": true,
  "edit_reason": "string",
  "can_view_edit_history": true,
  "wiki": true,
  "reviewable_id": 0,
  "reviewable_score_count": 0,
  "reviewable_score_pending_count": 0,
  "mentioned_users": [
    null
  ]
}
EOL;


$names = [
    "Dana",
    "Ute",
    "Uwe",
    "Jakub",
    "Markus",
    "Sascha",
    "Nico",
];

$user = $names[array_rand($names, 1)];

$title = sprintf(
    "Bugmeldung von %s",
    $user
);



http_response_code(200);
$id = time();
$output =  sprintf(
    $mask,
    $id,
    $user,
    strtolower($user),
    time(),
    $input["raw"],
    time(),
    $user,
    $title,
);

$storage[$id] = $output;

file_put_contents(STORAGE_FILE,json_encode($storage));

echo $output;
