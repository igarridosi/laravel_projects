@extends('learnBlade.index')

@section('title', 'News')

@section('content')
<div class="container">
        <h2 class="text-center">Latest News</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://img.freepik.com/vector-premium/icono-nueva-caracteristica-o-insignia-producto-aplicaciones-web_654297-724.jpg" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">New feature added!</h5>
                        <p class="card-text">We’ve added a better search functionality to help you find content faster.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://www.bigtime.net/wp-content/uploads/2024/02/Schedule-Conflicts_-How-to-Deal-with-Them-and-Benefit-From-the-Challenge.png" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">Scheduled Maintenance</h5>
                        <p class="card-text">Our website will be down for scheduled maintenance on October 20th from 12 AM to 3 AM.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://www.eastportlemouth.org.uk/wp-content/uploads/2024/05/Halloween-Party-2.jpg" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">Halloween Party!</h5>
                        <p class="card-text">Join us for a spooky night full of fun and games! Don’t miss the Halloween party on October 31st.</p>
                        <a href="#" class="btn btn-primary">RSVP Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
