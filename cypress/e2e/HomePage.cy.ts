describe("Home Page", () => {
	it("should load the home page", () => {
	  cy.visit("/");
	  cy.contains("Welcome!").should("be.visible");
	  cy.contains("Let’s connect!").should("be.visible");
	});
  });
  