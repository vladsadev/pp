<?php

use App\Models\Job;
use App\Models\Employer;

//test('it belongs to an employer', function () {
    it('belongs to an employer', function () {
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
//        'job_id' => $employer->id // MAL !!
        'employer_id' => $employer->id
    ]);
    // Make an action and assertion for this example together
    expect($job->employer->is($employer))->toBeTrue();
});

  it('can have tags',function (){
      $job = Job::factory()->create();

     // Act, use, make an action
      $job->tag('Frontend');

     //make an Assertion
     expect($job->tags)->toHaveCount(1);




  })  ;






