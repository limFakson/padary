@extends('index')
<div>
    <h3>This is the form to post to the database</h3>
    <form action="" method="POST" class="items-center justify-center mt-4 flex">
        <div class="morpheme">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <label for="textarea">Description:</label>
            <textarea name="description" id="description" name="textarea" cols="30" rows="10"></textarea>
            <div class="file">
                <input type="file" name="upload" hidden id="imageUploader">
            </div>
        </div>

    </form>
</div>
