<?php


test('visit AdminGroups', function () {
    $response = $this->get('/api/admin-groups');

    $response->assertStatus(200);
});
