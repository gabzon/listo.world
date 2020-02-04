{{--
  Template Name: Appbase test
--}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')

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

  curl_setopt_array ($curl, array(
  CURLOPT_URL => "https://scalr.api.appbase.io/experiensa/_doc/_search",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode(["query" => ["match_all" => new stdClass()]]),
  CURLOPT_POSTFIELDS => json_encode( array( "query" => array( "match" => array( "client_status" => "listo" )))),
  CURLOPT_HTTPHEADER => array("Authorization: Basic djluYTFUTVZrOmZhZTBhNTI3LWRmNDAtNDI4Zi05MjRkLTVhODJlYjVlODliZA==",
  "Content-Type: application/json"),
  )
  );

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
  echo "cURL Error #:" . $err;
  } else {
  $json = json_decode($response, true);
  }
  @endphp

  @php
  $emails = [];
  $e = "";
  @endphp

  @if (count($json['hits']['hits']) <= 1) 
    @php 
    error_log('solo hay un elemento'); 
    $e = $json['hits']['hits'][0]['_source']['email'];    
    @endphp 
    {{$e}}
  @else
    @foreach($json['hits']['hits'] as $i) 
      @php 
        $emails[]=$i['_source']['email']; 
      @endphp 
    @endforeach
    {{ implode(", ", $emails) }}
  @endif 

</div>
@endsection