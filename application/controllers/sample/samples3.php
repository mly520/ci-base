<?php
class samples3 extends MY_Model{

	function index()
	{
		// Load Library
		$this->load->library('s3');

		// Create a Bucket
		var_dump($this->s3->putBucket('My-Bucket', $this->s3->ACL_PUBLIC_READ));

		// List Buckets
		var_dump($this->s3->listBuckets());

//		h2. References
//
//			* "Original documentation for this class":http://undesigned.org.za/2007/10/22/amazon-s3-php-class/documentation
//* "Amazon S3 Documentation":http://docs.amazonwebservices.com/AmazonS3/2006-03-01/
	}

}