<?php

$main_endpoint = $env['API'];

function formatDate($dataString) { 
    $dateTime = DateTime::createFromFormat('Y-m-d\TH:i:s', $dataString); 
    return $dateTime->format('d/m/Y');
}
function fetchData($url) {
    $response = file_get_contents($url);
    if ($response !== false) {
        $data = json_decode($response, true);  
        if (!empty($data)) {
            return $data;
        } else {
            return 'Nenhum dado encontrado.';
        }
    } else {
        return 'Erro na requisição.';
    } 
}
function getImageURL($mediaId) {
    global $main_endpoint;
    $endpoint = $main_endpoint . "media/" . $mediaId . "?_fields=source_url"; 
    $data = fetchData($endpoint);
    $ImageURL = $data['source_url'];
    return $ImageURL;
}
function getAuthorName($authorId) {
    global $main_endpoint;
    $endpoint = $main_endpoint . "users/" . $authorId . "?_fields=name"; 
    $data = fetchData($endpoint);
    $authorName = $data['name'];
    return $authorName;
}
function getPost($endpoint) { 
    $result = fetchData($endpoint); 
    $data = $result[0];
    $image_url = getImageURL($data['featured_media']); 
    $AuthorName = getAuthorName($data['author']);
    $post = [
        'title' => $data['title']['rendered'],
        'description' => $data['excerpt']['rendered'],
        'date' => formatDate($data['date']),
        'author' => $AuthorName,
        'image' => $image_url,
        'link' => $data['link']
    ]; 
    return $post;
}

function getLatestPosts() { 
    global $main_endpoint;
    $endpoint = $main_endpoint . "posts?_embed&per_page=4&offset=1";
    $data = fetchData($endpoint);   
    $posts = [];
    foreach ($data as $post) {
        $posts[] = [
            'title' => $post['title']['rendered'], 
            'image' => $post['_embedded']['wp:featuredmedia'][0]['source_url'],
            'link' => $post['link'],
            'category' => $post['_embedded']['wp:term'][0][0]['name']
        ];
    }
    return $posts;
}

?>