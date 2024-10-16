@extends('learnBlade.index')

@section('title', 'Events')

@section('content')
<div class="container">
        <h2 class="text-center">Upcoming Events</h2>

        <div class="row">
            <!-- Event 1: Halloween Party -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F820935579%2F90270920919%2F1%2Foriginal.20240805-193015?w=600&auto=format%2Ccompress&q=75&sharp=10&rect=26%2C0%2C748%2C374&s=b2e71926e7f473e3947813d25355698f" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Halloween Party</h5>
                        <p class="card-text">A spooky night full of fun and games! Join us for our annual Halloween Party.</p>
                        <p><strong>Date:</strong> October 31, 2024</p>
                        <p><strong>Location:</strong> Main Hall, City Center</p>
                    </div>
                </div>
            </div>

            <!-- Event 2: Christmas Gala -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F739430659%2F1639916879813%2F1%2Foriginal.20240409-151403?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C117%2C1544%2C772&s=6fa3ceef8faa0e05cc4ea0061e251466" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">Christmas Gala</h5>
                        <p class="card-text">Celebrate the holiday season with our festive Christmas Gala.</p>
                        <p><strong>Date:</strong> December 25, 2024</p>
                        <p><strong>Location:</strong> Downtown Ballroom</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
