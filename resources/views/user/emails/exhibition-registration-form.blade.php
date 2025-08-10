<x-layouts.plain-app>
    <h2>New Message!</h2>
    <ul>
        <li>First Name : {{ $data['firstName'] }}</li>
        <li>Last Name : {{ $data['lastName'] }}</li>
        <li>Company Name : {{ $data['companyName'] }}</li>
        <li>Email : {{ $data['email'] }}</li>
        <li>Phone Number : {{ $data['phoneNumber'] }}</li>
        <li>Country : {{ $data['country'] }}</li>
        <li>Website : {{ $data['website'] }}</li>
        <li>Exhibition : {{ $data['exhibition'] }}</li>
    </ul>
</x-layouts.plain-app>