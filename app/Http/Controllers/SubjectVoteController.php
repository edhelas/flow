<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\Vote;

class SubjectVoteController extends Controller
{
    public function up(Request $request, int $subjectId)
    {
        $subject = Subject::findOrFail($subjectId);

        $this->clearVotes($subject, $request);
        $this->createVote($subject, $request, true);

        return redirect()->route('subjects.index');
    }

    public function down(Request $request, int $subjectId)
    {
        $subject = Subject::findOrFail($subjectId);

        $this->clearVotes($subject, $request);
        $this->createVote($subject, $request, false);

        return redirect()->route('subjects.index');
    }

    private function createVote(Subject $subject, Request $request, bool $mark = true)
    {
        $vote = new Vote;
        $vote->user_id = $request->user()->id;
        $vote->mark = $mark;
        $vote->subject_id = $subject->id;
        $vote->save();
    }

    private function clearVotes(Subject $subject, Request $request)
    {
        $subject->votes()
                ->where('user_id', $request->user()->id)
                ->delete();
    }
}
