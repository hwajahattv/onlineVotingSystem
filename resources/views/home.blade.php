@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-block">
            <div class="left-part">
                <i class="fas fa-graduation-cap"></i>
                <h1>Register to our courses</h1>
                <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.
                </p>
                <div class="btn-group">
                    <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
                    <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a>
                </div>
            </div>
            <form action="/">
                <div class="title">
                    <i class="fas fa-pencil-alt"></i>
                    <h2>Register here</h2>
                </div>
                <div class="info">
                    <input class="fname" type="text" name="name" placeholder="Full name">
                    <input type="text" name="name" placeholder="Email">
                    <input type="text" name="name" placeholder="Phone number">
                    <input type="password" name="name" placeholder="Password">
                    <select>
                        <option value="course-type" selected>Course type*</option>
                        <option value="short-courses">Short courses</option>
                        <option value="featured-courses">Featured courses</option>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="diploma">Diploma</option>
                        <option value="certificate">Certificate</option>
                        <option value="masters-degree">Masters degree</option>
                        <option value="postgraduate">Postgraduate</option>
                    </select>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="checkbox"><span>I agree to the <a
                            href="https://www.w3docs.com/privacy-policy">Privacy Poalicy for W3Docs.</a></span>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
@endsection
