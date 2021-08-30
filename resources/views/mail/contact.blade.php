<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul>
    <li>
        <h2>Name: {{ $details['name'] }}</h2>
    </li>
    <li>
        <h2>Email: {{ $details['email'] }}</h2>
    </li>
    <li>
        <h2>Phone: {{ $details['phone'] }}</h2>
    </li>
    <li>
        <h2>Project Scope: {{ $details['project_scope'] }}</h2>
    </li>
    <p>Content: {{ $details['content'] }}</p>
</ul>
</body>
</html>
