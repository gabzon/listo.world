@php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/_search",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  //CURLOPT_POSTFIELDS => json_encode(["query" => ["match_all" => new stdClass()]]),
  //   CURLOPT_POSTFIELDS => json_encode(array(
  //   "query" => array(
  //     "match" => array(
  //       "email" => "info@abyssworld.com"
  //     )
  //   )
  // )),
  //

  CURLOPT_POSTFIELDS => json_encode(array(
    "query" => array(
      "filtered" => array(
        "query" => array(
          "match" => [ "client_status" => "listo" ]
        ),
        "filter" => array(
          "terms" => array(
            "countries" => ['France']
          )
        )
      )
    )
  )
),




// {
//   "filtered": {
//     "query": {
//       "match": { "title": "hello world" }
//     },
//     "filter": {
//       "terms": {
//         "tags": ["c", "d"]
//       }
//     }
//   }
// }





CURLOPT_HTTPHEADER => array(
  "Authorization: Basic djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==",
  "Content-Type: application/json"
),
)
);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $json = json_decode($response, true);
  print_r("@search hits: ");
  echo '<pre>';
  print_r($json['hits']['hits']);
  echo '</pre>';
}

@endphp
