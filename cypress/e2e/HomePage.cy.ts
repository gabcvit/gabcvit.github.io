describe("Home Page", () => {
	it("should load the home page", () => {
	  cy.visit("/");
	  cy.contains("Unapologetically human").should("be.visible");
	  cy.contains("Who am I").should("be.visible");
	  cy.contains("What drives me").should("be.visible");
	  cy.contains("Socials").should("be.visible");
	  cy.contains("Content in this website").should("be.visible");
	  cy.contains("RSS Feed").should("be.visible");
	});
  });
  