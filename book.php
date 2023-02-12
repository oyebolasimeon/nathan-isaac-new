<?php require "header.php" ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Resources</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Resources</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Books</a>
        </div>
    </div>
</div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Book Store</h5>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width: 100%; height: 50vh;" src="books/pocket-without-holes.jpg" alt="">
                        <!-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> -->
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Pocket Without Holes</h4>
                        <p class="text-uppercase m-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Purchase
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pocket Without Holes Checkout Page</h5>
                            <button type="button" style="outline: none; border: none; background:transparent; font-size: 18px;" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-email">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Phone Number:</label>
                                    <input type="text" class="form-control" id="recipient-number">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Number of Copies:</label>
                                    <input type="number" class="form-control" id="recipient-copies">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="recipient-name" class="col-form-label">Amount:</label> -->
                                    <input type="number" class="form-control" id="recipient-amount" value="300" hidden readonly>
                                    <input type="number" class="form-control" id="product-name" value="Pocket Without Holes Ebook" hidden readonly>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" onclick="payWithPaystack()" class="btn btn-primary">Purchase</button>
                        </div>
                    </div>
                </div>
            </div>

                            <!-- <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"> Purchase</a> -->
                        </p>
                    </div>
                </div>
            </div>


            

        </div>
    </div>
</div>

<?php require "footer.php" ?>