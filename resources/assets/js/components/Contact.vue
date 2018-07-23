<template>
    <div class="contact">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="contact-headings text-center py-5">
                        <h2 class="h2-responsive">
                            <span>Say</span>
                            <span>Hi</span>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </h2>
                        <p class="py-4">Drop me a line, I'll get back to you!</p>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact_form-wrapper">
                        <form action="#" class="form">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form__group form-group">
                                        <input type="text" class="form__input form-control" placeholder="Name" name="name" id="name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form__group form-group">
                                        <input type="email" class="form__input form-control" placeholder="Email" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group form-group">
                                        <textarea class="form__input form-control" name="contactMessage" id="contactMessage" cols="30" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <button class="btn-submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Contact"
    }
</script>

<style scoped>
    .form-control.error{
        border-color: #E84444;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(232,68,68,.6);
    }
</style>