<?php

class Trainers extends Controller
{
    public function index()
    {
        $db = new Database();
        $trainers = $db->query("SELECT * FROM trainers");
        $data['title'] = "Trainers";
        $data['trainers'] = $trainers;

        $this->view('trainers', $data);
    }

    public function apply()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db = new Database();

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $description = $_POST['description'];
            $twitter = $_POST['twitter'];
            $facebook = $_POST['facebook'];
            $instagram = $_POST['instagram'];
            $linkedin = $_POST['linkedin'];

           
            $image = $_FILES['image']['name'];
            $targetDir = "public/assets/img/trainers/";
            $targetFile = $targetDir . basename($image);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $query = "INSERT INTO trainers (name, email, subject, description, image, twitter, facebook, instagram, linkedin) 
                          VALUES (:name, :email, :subject, :description, :image, :twitter, :facebook, :instagram, :linkedin)";
                $db->query($query, [
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'description' => $description,
                    'image' => $image,
                    'twitter' => $twitter,
                    'facebook' => $facebook,
                    'instagram' => $instagram,
                    'linkedin' => $linkedin
                ]);

                header("Location: " . ROOT . "/trainers");
                exit();
            } else {
                $data['error'] = "Failed to upload image.";
            }
        }

        $data['title'] = "Apply as a Trainer";
        $this->view('apply.trainer', $data);
    }
}
