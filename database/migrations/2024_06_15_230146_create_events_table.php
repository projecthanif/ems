<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->string('startDate');
            $table->string('endDate');
            $table->json('location');
            $table->longText('description');
            $table->string('eventType');
            $table->json('organizer');
            $table->json('images');
            $table->json('attachments');
            $table->unsignedInteger('capacity');
            $table->dateTime('registrationDeadline');
            $table->string('rsvpOptions'); //["Attending", "Maybe", "Not Attending"]
            $table->json('invitationList');
            $table->json('ticketing');
            $table->json('agenda');
            $table->json('speakers');
            $table->json('sponsors');
            $table->string('notes');
            $table->json('socialMedia');
            $table->string('accessibility');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
