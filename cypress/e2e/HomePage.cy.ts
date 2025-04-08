describe("Home Page", () => {
	it("should load the home page", () => {
	  cy.visit("/");
	  cy.contains("Hello there!").should("be.visible");
	  cy.contains("Social links").should("be.visible");
	});
  });
  