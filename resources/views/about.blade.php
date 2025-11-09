@extends('layouts.main')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">About Us</h2>

    <p>
        Welcome to <strong>EduFun</strong> — a platform dedicated to providing high-quality learning
        resources to help you understand topics in Data Science, Machine Learning, Cyber Security,
        and more.
    </p>

    <p>
        We aim to make education accessible and enjoyable by offering curated articles written
        by experts in their fields.
    </p>

    <h4 class="mt-4">Our Mission</h4>
    <ul>
        <li>Provide high-quality educational content</li>
        <li>Deliver learning material from trusted writers</li>
        <li>Encourage continuous growth and self-learning</li>
    </ul>

    <h4 class="mt-4">Our Team</h4>
    <p>
        We are a group of educators, tech enthusiasts, and content creators committed to
        building a community of learners.
    </p>

    <hr>
    <p class="text-muted">
        © {{ date('Y') }} EduFun. All rights reserved.
    </p>

</div>
@endsection
