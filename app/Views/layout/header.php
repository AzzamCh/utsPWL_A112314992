<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'Dashboard' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/custom.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/img/logo.png" alt="Logo" height="28" class="me-2">
      Zamzi Galon
    </a>
    <div class="d-flex">
      <span class="navbar-text text-white me-3">
        Login sebagai: <strong><?= session('username') ?></strong>
      </span>
      <a href="/logout" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </div>
</nav>
<main>
