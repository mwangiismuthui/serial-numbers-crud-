<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Notification</title>
<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #f7f8fa;
    font-family: 'Segoe UI', Arial, sans-serif;
    color: #333;
  }

  table {
    border-spacing: 0;
    width: 100%;
  }

  .container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  }

  .header {
    background-color: #004aad;
    color: #ffffff;
    text-align: center;
    padding: 30px 20px;
  }

  .header h1 {
    margin: 0;
    font-size: 24px;
    letter-spacing: 0.5px;
  }

  .content {
    padding: 30px 40px;
    line-height: 1.6;
  }

  .content h2 {
    font-size: 20px;
    color: #004aad;
    margin-bottom: 15px;
  }

  .content p {
    font-size: 15px;
    margin: 8px 0;
  }

  .data-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  .data-table td {
    padding: 8px 0;
    font-size: 14px;
    border-bottom: 1px solid #eee;
  }

  .footer {
    background-color: #f1f1f1;
    text-align: center;
    padding: 20px;
    font-size: 13px;
    color: #777;
  }

  @media screen and (max-width: 600px) {
    .content {
      padding: 20px;
    }
    .header h1 {
      font-size: 20px;
    }
  }
</style>
</head>
<body>

  <table role="presentation" class="container">
    <tr>
      <td class="header">
        <h1>{{ $topic }}</h1>
      </td>
    </tr>

    <tr>
      <td class="content">
        <h2>Contact Details</h2>
        <table class="data-table">
          <tr><td><strong>Name:</strong></td><td>{{ $fname }} {{ $lname }}</td></tr>
          <tr><td><strong>Email:</strong></td><td>{{ $email }}</td></tr>
          <tr><td><strong>Company:</strong></td><td>{{ $company }}</td></tr>
          <tr><td><strong>Job Title:</strong></td><td>{{ $jtitle }}</td></tr>
          <tr><td><strong>Address:</strong></td>
              <td>{{ $street1 }} {{ $street2 }} {{ $street3 }}</td></tr>
          <tr><td><strong>Zip Code:</strong></td><td>{{ $postal_code }}</td></tr>
          <tr><td><strong>City:</strong></td><td>{{ $city }}</td></tr>
          <tr><td><strong>State/Province:</strong></td><td>{{ $state }}</td></tr>
          <tr><td><strong>Country:</strong></td><td>{{ $country }}</td></tr>
          <tr><td><strong>Contact Method:</strong></td><td>{{ $contact_method }}</td></tr>
        </table>

        <h2 style="margin-top:30px;">Description</h2>
        <p>{{ $desc }}</p>
      </td>
    </tr>

    <tr>
      <td class="footer">
       Copyright &copy; {{ date('Y') }} Yokohama<br>
        You are receiving this email because you submitted a form on our website.
      </td>
    </tr>
  </table>

</body>
</html>
