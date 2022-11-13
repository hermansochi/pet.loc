Feature: View api home page
  In order to check home page content
  As a guest user
  I want to be able to view home page

  @smoke
  Scenario: View api home page content
    Given I am a guest user
    When I open "/" page in api project
    Then I see default laravel page