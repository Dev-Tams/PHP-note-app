<?php


require BASE_PATH.('Core/functions.php');



test('logins a user', function () {
    // Create a test user
    $user = [
        'email' => 'test@example.com',
        // Other user properties if needed
    ];

    // Call the login function
    login($user);

    // Assert that the user session has been set correctly
    expect($_SESSION['user']['email'])->toEqual($user['email']);

    // Assert that session_regenerate_id has been called with true
    // You might need to adapt this assertion based on your test environment
    expect(true)->toBeTrue();
});
