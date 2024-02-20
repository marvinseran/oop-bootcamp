<?php

class Content {
    protected $title;
    protected $text;

    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }

    public function display() {
        echo "<h2>" . $this->getTitle() . "</h2>";
        echo "<p>" . $this->getText() . "</p>";
    }
}

class Article extends Content {
    private $isBreaking;

    public function __construct($title, $text, $isBreaking = false) {
        parent::__construct($title, $text);
        $this->isBreaking = $isBreaking;
    }

    public function getTitle() {
        if ($this->isBreaking) {
            return "BREAKING: " . parent::getTitle();
        }
        return parent::getTitle();
    }
}

class Ad extends Content {
    public function getTitle() {
        return strtoupper(parent::getTitle());
    }
}

class Vacancy extends Content {
    public function getTitle() {
        return parent::getTitle() . " - apply now!";
    }
}


$contents = [
    new Article("Article 1", "This is the text of article 1."),
    new Article("Article 2", "This is the text of article 2, marked as breaking news.", true),
    new Ad("Ad 1", "This is the text of ad 1."),
    new Vacancy("Vacancy 1", "This is the text of vacancy 1.")
];

foreach ($contents as $content) {
    $content->display();
}
?>
