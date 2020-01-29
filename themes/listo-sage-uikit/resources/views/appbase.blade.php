{{--
  Template Name: Appbase test
--}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @php
    $curl = curl_init();

    curl_setopt_array(
    $curl,
    array(
    CURLOPT_URL => "https://scalr.api.appbase.io/housing-demo/listing/H1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array("Authorization: Basic WW5DZ1Z3b3pWOmU5ZWM1Y2IwLTU4ZDgtNGJiMC1iYWRjLWFjYWY3MjY2NjFmMQ==",
    "Content-Type: application/json"),
    )
    );

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    @endphp
    @if ($err)
    cURL Error #: {{$err}}
    @else
    @php
    $json = json_decode($response, true)
    @endphp
    <pre>
            @php 
                print_r("@get success: "); 
                print_r($json["_source"]);
            @endphp
        </pre>
    @endif
    @endwhile

    <br>
    <hr>
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
    CURLOPT_POSTFIELDS => json_encode(["query" => ["match_all" => new stdClass()]]),
    CURLOPT_POSTFIELDS => json_encode(array(
    "query" => array(
    "match" => array(
    "client_status" => "listo"
    )
    )
    )),
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
    echo '
    <pre>';
  print_r($json['hits']['hits']);
  echo '</pre>';
    }

    @endphp
    <pre>hola</pre>
</div>

@endsection