<!-- resources/views/front/edit_course.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Course</h2>
        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" required>
            </div>
            <!-- <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{ $course->thumbnail }}" required>
            </div> -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="6" required>{{ $course->description }}</textarea>
                <!-- Adjusted rows attribute to 6 for a larger textarea -->
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $course->price }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Current Image</label>
                <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="img-fluid mt-2">
                <input type="file" class="form-control mt-2" id="image" name="image">
                <!-- Add file input for image if you allow updating -->
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">Current Video</label>
                <video controls class="mt-2" width="100%">
                    <source src="{{ $course->video_url }}" type="video/mp4">
                </video>
                <input type="file" class="form-control mt-2" id="video" name="video">
                <!-- Add file input for video if you allow updating -->
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
