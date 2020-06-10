<?php
    class Job {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        //Get all jobs
        public function getAllJobs() {
            $this->db->query("SELECT jobs.*, categories.name AS cname
                            FROM jobs
                            INNER JOIN categories
                            ON jobs.category_id = categories.id
                            ORDER BY post_date DESC
                            ");
            //Assign the result set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Categories for Search feature
        public function getCategories() {
            $this->db->query("SELECT * FROM categories");

            $results = $this->db->resultSet();

            return $results;
        }

        //Get jobs by Category
        public function getByCategory($category) {
            $this->db->query("SELECT jobs.*, categories.name AS cname
                            FROM jobs
                            INNER JOIN categories
                            ON jobs.category_id = categories.id
                            WHERE jobs.category_id = $category
                            ORDER BY post_date DESC
                            ");
            //Assign the result set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get category
        public function getCategory($category_id) {
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");
            
            $this->db->bind(':category_id', $category_id);

            $row = $this->db->single();

            return $row;
        }
    }