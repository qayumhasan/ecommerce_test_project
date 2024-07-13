<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Dashboard with Sidebar</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom styles */
    .dashboard {
      padding-top: 20px;
    }

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 0 0;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      background-color: #f8f9fa;
      overflow-y: auto;
      /* Enable scrolling if sidebar content exceeds height */
    }

    .main-content {
      margin-left: 250px;
      padding: 20px;
    }

    .items-title {
      background: #504949;
      width: 100%;
      color: white;
      display: block;
      padding: 15px;
      margin-bottom: 17px;
    }

    @media (max-width: 992px) {
      .main-content {
        margin-left: 0;
      }

      .sidebar {
        width: 250px;
        margin-left: -250px;
        transition: margin 0.3s ease;
      }

      .sidebar.open {
        margin-left: 0;
      }
    }
  </style>
</head>