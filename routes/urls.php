//rooms
    Route::get('/roomList', [RoomController::class, 'roomList']);
    Route::get('/roomGetById/{id}', [RoomController::class, 'roomGetById']);
    Route::post('/roomCreate', [RoomController::class, 'roomCreate']);
    Route::put('/roomUpdate/{id}', [RoomController::class, 'roomUpdate']);
    Route::delete('/roomDelete/{id}', [RoomController::class, 'roomDelete']);
