Feature: Logged user panel admin
  In order to maintain the posts shown on the site
  As an user
  I need to be able to see all posts
  Scenario: List available posts
    Given I am logged in as an user
    And I am on "/posts"
    When I click "Hanked"
    Then I should see 5 posts
  @javascript
  Scenario: Add a new post
    Given I am logged in as an user
    And I am on "/posts/create"
    And I fill in "Name" with "Test1111"
    And I fill in "Kategooria" with "Ehitus"
    And I fill in "Hanke kirjeldus" with "Hanke tapne kirjeldus"
    And I press "Avalda"
    Then I should see "Hange on lisatud"
    # verify that we are the owner of the toy