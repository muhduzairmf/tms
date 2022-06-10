<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 2");
?>
<br><br>
<section class="container py-2">
<div class="columns">
    <div class="column col-6 col-sm-11 col-mx-auto">
        <form class="form-horizontal my-2" x-data="{
            category: 'Standard 4-6',
        }">
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="category">Category</label>
                </div>
                <div class="col-9 col-sm-12">
                    <label class="form-radio">
                        <input type="radio" name="category" value="Standard 4-6" x-model="category">
                        <i class="form-icon"></i> Standard 4-6 
                    </label>
                    <label class="form-radio">
                        <input type="radio" name="category" value="Form 1-3" x-model="category">
                        <i class="form-icon"></i> Form 1-3
                    </label>
                    <label class="form-radio">
                        <input type="radio" name="category" value="Form 4-5" x-model="category">
                        <i class="form-icon"></i> Form 4-5
                    </label>
                </div>
            </div>
            <!-- if category === 'Standard 4-6' -->
            <div x-show="category === 'Standard 4-6'"> 
                <div class="divider"></div>
                <p class="text-center"><strong>Standard 4-6</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="subject1">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Mathematics
                        </label>
                    </div>
                </div>
            </div>
            <!-- else if category === 'Form 1-3' -->
            <div x-show="category === 'Form 1-3'">
                <div class="divider"></div>
                <p class="text-center"><strong>Form 1-3</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label for="" class="form-label">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Mathematics
                        </label>
                    </div>
                </div>
            </div>
            <!-- else if category === 'Form 4-5' -->
            <div x-show="category === 'Form 4-5'">
                <div class="divider"></div>
                <p class="text-center"><strong>Form 4-5</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label for="" class="form-label">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Biology
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Physics
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Chemistry
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Additional
                            Mathematics
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox">
                            <i class="form-icon"></i> Accounting Principles
                        </label>
                    </div>
                </div>
            </div>
            <p class="text-right">
                <a href="/student.php?register=step-1" class="btn">Back</a>
                <a href="/student.php?register=step-3" class="btn btn-primary">Next</a>
            </p>
        </form>
    </div>
</div>
</section>