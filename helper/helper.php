<?php
function validate(array $data)
{
  global $_POST;
  $validated = [];

  if (!isset($_SESSION['form'])) {
    $_SESSION['form'] = [];
  }

  foreach ($data as $key) {
    if (isset($_POST[$key]) && trim($_POST[$key]) != '') {
      $_SESSION['form'][$key] = htmlspecialchars($_POST[$key]);
    }
  }

  foreach ($data as $key) {
    if (isset($_POST[$key]) && trim($_POST[$key]) != '') {
      $validated[$key] = htmlspecialchars($_POST[$key]);
    } else {
      return false;
    }
  }

  return $validated;
}

function hasSuccess()
{
  return isset($_SESSION['success']);
}

function hasError()
{
  return isset($_SESSION['error']);
}

function success()
{
  if (hasSuccess()) {
    $data = $_SESSION['success'];
    unset($_SESSION['success']);
    return $data;
  } else {
    return null;
  }
}

function error()
{
  if (hasError()) {
    $data = $_SESSION['error'];
    unset($_SESSION['error']);
    return $data;
  } else {
    return null;
  }
}

function setSuccess(string $data): void
{
  $_SESSION['success'] = $data;
}

function setError(string $data): void
{
  $_SESSION['error'] = $data;
}
