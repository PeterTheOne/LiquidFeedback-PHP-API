<?php

// todo: autoload
require_once 'Slim_Framework_TestCase.php';

class IntegrationTest extends Slim_Framework_TestCase {

    public function testGetIndex() {
        $this->get('/');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Application authentication and session management
     */

    public function testPostSession() {
        $this->post('/session');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * System information
     */

    public function testGetInfo() {
        $this->get('/info');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetMemberCount() {
        $this->get('/member_count');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetContingent() {
        $this->get('/contingent');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetContingentLeft() {
        $this->get('/contingent_left');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Members
     */

    public function testGetMember() {
        $this->get('/member');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostMember() {
        $this->post('/member');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetMemberHistory() {
        $this->get('/member_history');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetMemberImage() {
        $this->get('/member_image');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostMemberImage() {
        $this->post('/member_image');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetContact() {
        $this->get('/contact');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostContact() {
        $this->post('/contact');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetPrivilege() {
        $this->get('/privilege');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Policies
     */

    public function testGetPolicy() {
        $this->get('/policy');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Units
     */

    public function testGetUnit() {
        $this->get('/unit');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Areas
     */

    public function testGetArea() {
        $this->get('/area');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetAllowedPolicy() {
        $this->get('/allowed_policy');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetMembership() {
        $this->get('/membership');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostMembership() {
        $this->post('/membership');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Issues
     */

    public function testGetIssue() {
        $this->get('/issue');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetPopulation() {
        $this->get('/population');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetInterest() {
        $this->get('/interest');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostInterest() {
        $this->post('/interest');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetIssueComment() {
        $this->get('/issue_comment');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostIssueComment() {
        $this->get('/issue_comment');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Initiatives
     */

    public function testGetInitiative() {
        $this->get('/initiative');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetInitiator() {
        $this->get('/initiator');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostInviteInitiator() {
        $this->get('/invite_initiator');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostInitiator() {
        $this->post('/initiator');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetSupporter() {
        $this->get('/supporter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostSupporter() {
        $this->post('/supporter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetBattle() {
        $this->get('/battle');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Drafts
     */

    public function testGetDraft() {
        $this->get('/draft');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostDraft() {
        $this->post('/draft');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Suggestions
     */

    public function testGetSuggestion() {
        $this->get('/suggestion');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostSuggestion() {
        $this->post('/suggestion');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetOpinion() {
        $this->get('/opinion');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostOpinion() {
        $this->post('/opinion');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Delegations
     */

    public function testGetDelegation() {
        $this->get('/delegation');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostDelegation() {
        $this->post('/delegation');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Voting
     */

    public function testGetVoter() {
        $this->get('/voter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostVoter() {
        $this->post('/voter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetDelegatingVoter() {
        $this->get('/delegating_voter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetVote() {
        $this->get('/vote');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetNonVoter() {
        $this->get('/non_voter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostNonVoter() {
        $this->post('/non_voter');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Events
     */

    public function testGetEvent() {
        $this->get('/event');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetIgnoredMember() {
        $this->get('/ignored_member');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostIgnoredMember() {
        $this->post('/ignored_member');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testGetIgnoredInitiative() {
        $this->get('/ignored_initiative');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostIgnoredInitiative() {
        $this->post('/ignored_initiative');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    /**
     * Settings
     */

    public function testGetSetting() {
        $this->get('/setting');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

    public function testPostSetting() {
        $this->get('/setting');
        $this->assertEquals('200', $this->response->status());
        //$this->assertEquals(/* */, $this->response->body());
    }

} 