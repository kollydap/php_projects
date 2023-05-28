<!DOCTYPE html>
<html>

<head></head>

<body>
    <form action="/gigs" method="POST">
        @csrf
        <input class="form-control mr-2" type="text" name="company" placeholder="company name">
        @error('company')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="location" placeholder="Job Location">
        @error('location')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="title" placeholder="Job Title">
        @error('title')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="website" placeholder="Website URL">
        @error('website')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="tags" placeholder="Tags">
        @error('tags')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="description" placeholder="Description">
        @error('description')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="text" name="email" placeholder="mail">
        @error('email')
            <p>wrong</p>
        @enderror
        <input class="form-control mr-2" type="file" name="logo" placeholder="mail">
        @error('logo')
            <p>wrong</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>

</html>
