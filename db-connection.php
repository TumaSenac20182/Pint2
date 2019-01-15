<?php
  $host = "ec2-107-20-193-206.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dcnjhdj7n4hhqv";
  $user = "dcnjhdj7n4hhqv";
  $password = "588c9df1b2cb2d3c60482033235a79fc2d767b7027bc381aa5a83df4b8767442";
  $pg_options = "--client_encoding=UTF8";

  function getConnection() {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);
  }
