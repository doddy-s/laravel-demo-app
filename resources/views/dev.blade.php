<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <!-- Insert PHP or JavaScript code to generate rows dynamically from the provided JSON data -->
    <!-- For simplicity, you can manually input the data for each row -->
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
      </tr>
    @endforeach
    <!-- Repeat the above row structure for each user in the provided data -->
  </tbody>
</table>
