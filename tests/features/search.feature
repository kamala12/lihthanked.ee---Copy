Feature: Search for a word that exists
  In order to find information about Estonia
  As a website user
  I need to be able to see phrase "Your are logged in!" after user is logged in.

  @javascript
  Scenario: Search for a word that exists
    Given I am on "/login"
    When I fill in "email" with "riho@riho.ee"
    When I fill in "password" with "password"
    And I press "Logi sisse"
    And I wait 2
    Then I should see "You are logged in!"