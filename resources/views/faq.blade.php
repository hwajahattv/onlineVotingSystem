@extends('layouts.eVotingApp')
@section('links')
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="text-bg">
            <h1>Select the region and then province to see its schedule.</h1>
            </div>
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="cd-faq__items">
                        <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
                            <div class="cd-faq__items">
                                <ul id="basics" class="cd-faq__group">
                                    <li class="cd-faq__title"><h2>Basics</h2></li>
                                    <li class="cd-faq__item">
                                        <a class="cd-faq__trigger"
                                           href="#0"><span>How do I change my password?</span></a>
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae
                                                    quidem blanditiis delectus corporis, possimus officia sint sequi
                                                    ex tenetur id impedit est pariatur iure animi non a ratione
                                                    reiciendis nihil sed consequatur atque repellendus fugit
                                                    perspiciatis rerum et. Dolorum consequuntur fugit deleniti,
                                                    soluta fuga nobis. Ducimus blanditiis velit sit iste delectus
                                                    obcaecati debitis omnis, assumenda accusamus cumque perferendis
                                                    eos aut quidem! Aut, totam rerum, cupiditate quae aperiam
                                                    voluptas rem inventore quas, ex maxime culpa nam soluta labore
                                                    at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem
                                                    autem atque quis quam voluptate fugiat earum rem hic,
                                                    reprehenderit quaerat tempore at. Aperiam.</p>
                                            </div>
                                        </div> <!-- cd-faq__content -->
                                    </li>

                                    <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"><span>How do I sign up?</span></a>
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                                                    cupiditate et laudantium esse adipisci consequatur modi possimus
                                                    accusantium vero atque excepturi nobis in doloremque repudiandae
                                                    soluta non minus dolore voluptatem enim reiciendis officia
                                                    voluptates, fuga ullam? Voluptas reiciendis cumque molestiae
                                                    unde numquam similique quas doloremque non, perferendis
                                                    doloribus necessitatibus itaque dolorem quam officia atque
                                                    perspiciatis dolore laudantium dolor voluptatem eligendi?
                                                    Aliquam nulla unde voluptatum molestiae, eos fugit ullam,
                                                    consequuntur, saepe voluptas quaerat deleniti. Repellendus magni
                                                    sint temporibus, accusantium rem commodi?</p>
                                            </div>
                                        </div> <!-- cd-faq__content -->
                                    </li>

                                    <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"><span>Can I remove a post?</span></a>
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Blanditiis provident officiis, reprehenderit numquam.
                                                    Praesentium veritatis eos tenetur magni debitis inventore fugit,
                                                    magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio
                                                    velit.</p>
                                            </div>
                                        </div> <!-- cd-faq__content -->
                                    </li>

                                    <li class="cd-faq__item">
                                        <a class="cd-faq__trigger" href="#0"><span>How do reviews work?</span></a>
                                        <div class="cd-faq__content">
                                            <div class="text-component">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Blanditiis provident officiis, reprehenderit numquam.
                                                    Praesentium veritatis eos tenetur magni debitis inventore fugit,
                                                    magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio
                                                    velit.</p>
                                            </div>
                                        </div> <!-- cd-faq__content -->
                                    </li>
                                </ul> <!-- cd-faq__group -->


                                <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                                <div class="cd-faq__overlay" aria-hidden="true"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        @endsection
        @section('script')
            <script src="{{ asset('js/faq.js') }}"></script>
            <script src="{{ asset('js/faq2.js') }}"></script>
@endsection

